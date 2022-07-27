<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\FoodManu;
use App\Models\Order;
use App\Models\OrderBookedTable;
use App\Models\OrderDetails;
use App\Models\OrderIngredient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('burger_maker.pages.frontend.home');
    }

    public function menu()
    {
        return view('burger_maker.pages.frontend.menu');
    }

    public function cart()
    {
        return view('burger_maker.pages.frontend.cart');
    }

    public function order_list()
    {
        return view('burger_maker.pages.frontend.order_list');
    }

    public function create_menu(FoodManu $id)
    {
        return view('burger_maker.pages.frontend.create_menu', ['menu' => $id]);
    }

    public function check_booked_table_status(Request $request)
    {
        $date = Carbon::parse($request->date)->toDateTimeString();
        $start_time = Carbon::parse($request->date . ' ' . $request->start_time)->toDateTimeString();
        $end_time = Carbon::parse($request->date . ' ' . $request->end_time)->toDateTimeString();
        $booked_tables = OrderBookedTable::whereDate('date', $date)
            ->where(function ($q) use ($start_time, $end_time) {
                return $q->whereBetween('start_time', [$start_time, $end_time])
                    ->orWhereBetween('end_time', [$start_time, $end_time]);
            })
            ->get();

        // dd([request()->all(), $date, $start_time, $end_time, $booked_tables->toArray()]);
        return response()->json($booked_tables);
    }

    public function search_orders(Request $request)
    {
        $orders = Order::where(function ($q) use ($request) {
            return $q->where('email', $request->search_key)
                ->orWhere('phone_number', $request->search_key);
        })
        // ->where('status','!=','canceled')
        ->with([
            'order_details' => function ($q) {
                return $q->with([
                    'order_ingredients'
                ]);
            },
            'order_booked_tables',
        ])
        ->orderBy('id','DESC')
        ->get();

        return response()->json($orders);
    }

    public function cancel_order()
    {
        $order = Order::where('id',request()->id)->first();
        $order->status = 'canceled';
        $order->save();
        return $order;
    }

    public function checkout_confirm()
    {
        // return request()->all();
        $date = Carbon::parse(request()->date)->toDateString();
        $order = new Order();
        $order->full_name = request()->full_name;
        $order->email = request()->email;
        $order->phone_number = request()->phone_number;
        $order->comment = request()->comment;
        $order->payment_type = request()->payment_type;
        $order->delivery_type = request()->delivery_type;
        $order->delivery_time = request()->delivery_time;
        $order->specific_time_watch_value = request()->specific_time_watch_value;
        $order->total_amount = request()->total_amount;

        if (request()->delivery_type == 'onsite') {
            $order->date = Carbon::parse(request()->date)->toDateTimeString();
            $order->start_time = Carbon::parse($date . ' ' . request()->start_time)->toDateTimeString();
            $order->end_time = Carbon::parse($date . ' ' . request()->end_time)->toDateTimeString();
            $order->person = request()->person;
        }
        $order->save();

        foreach (json_decode(request()->cart_list) as $ingredients) {
            $order_details = new OrderDetails();
            $order_details->order_id = $order->id;
            $order_details->product_id = $ingredients->id;
            $order_details->title = $ingredients->title;
            $order_details->image = $ingredients->thumb_image;
            $order_details->qty = $ingredients->qty;
            $order_details->total_amount = $ingredients->total_amount;
            $order_details->save();

            foreach ($ingredients->ingredients as $ingredient) {
                $order_ingredients = new OrderIngredient();
                $order_ingredients->product_id = $ingredients->id;
                $order_ingredients->order_id = $order->id;
                $order_ingredients->order_details_id = $order_details->id;
                $order_ingredients->title = $ingredient->title;
                $order_ingredients->image = $ingredient->image;
                $order_ingredients->price = $ingredient->price;
                $order_ingredients->qty = $ingredient->qty;
                $order_ingredients->total = $ingredient->qty * $ingredient->price;
                $order_ingredients->save();
            }
        }

        if (is_array(request()->booked_chairs)) {
            foreach (request()->booked_chairs as $value) {
                $order_booked_tables = new OrderBookedTable();
                $order_booked_tables->order_id = $order->id;
                $order_booked_tables->date = $order->date;
                $order_booked_tables->start_time = $order->start_time;
                $order_booked_tables->end_time = $order->end_time;
                $order_booked_tables->chair_no = $value;
                $order_booked_tables->save();
            }
        }

        session()->put('order_id', $order->id);

        if ($order->payment_type == 'card') {
            $line_items = [];
            foreach (json_decode(request()->cart_list) as $item) {
                $line_items[] = [
                    'price_data' => [
                        'currency' => 'bdt',
                        // 'unit_amount' => ceil(($item->total_amount / $item->qty) * 100),
                        'unit_amount' => ceil($item->total_amount) * 100,
                        'product_data' => [
                            'name' => $item->title,
                            // 'images' => ["https://i.imgur.com/EHyR2nP.png"],
                            'images' => [url('') . $item->thumb_image],
                        ],
                    ],
                    'quantity' => (int) $item->qty,
                ];
            }

            // return $line_items;
            // dd('');

            $stripe = new \Stripe\StripeClient(env('STRIPE_TEST'));
            header('Content-Type: application/json');
            $YOUR_DOMAIN = url('');
            $checkout_session = $stripe->checkout->sessions->create([
                'payment_method_types' => ['card'],
                'line_items' => $line_items,
                // 'line_items' => [[
                //     'price_data' => [
                //         'currency' => 'bdt',
                //         'unit_amount' => $order->total_amount * 100,
                //         // 'product_data' => $product_data,
                //         'product_data' => [
                //             'name' => 'Stubborn Attachments',
                //             'images' => ["https://i.imgur.com/EHyR2nP.png"]
                //         ],
                //     ],
                //     'quantity' => 1,
                // ]],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/checkout_success',
                'cancel_url' => $YOUR_DOMAIN . '/cart',
                'metadata' => [
                    'full_name' => $order->full_name,
                    'email' => $order->email,
                    'phone_number' => $order->phone_number,
                ]
            ]);

            $order->payment_id = $checkout_session->payment_intent;
            $order->save();
            session()->put('order_payment_id', $order->payment_id);
            // echo "<pre>";
            // print_r( $checkout_session);
            return response()->json(['id' => $checkout_session->id]);
        } else {
            return 0;
        }
    }

    public function checkout_success()
    {
        // $stripe = new \Stripe\StripeClient(env("STRIPE_TEST"));
        // $data = $stripe->paymentIntents->retrieve(
        //     session()->get('order_payment_id'),
        //     []
        // );
        // dd($data);
        if (session()->has('order_payment_id')) {
            $order = Order::where('payment_id', session()->get('order_payment_id'))->first();
            $order->payment_status = 'paid';
            $order->save();
        } else {
            $order = Order::where('id', session()->get('order_id'))->first();
        }

        $order_details = OrderDetails::where('order_id', $order->id)->get();

        session()->forget('order_payment_id');
        try {
            Mail::to($order->email)->send(new OrderMail($order, $order_details));
        } catch (\Throwable $th) {
            return view('burger_maker.pages.frontend.success', compact('order', 'order_details'));
        }
        // session()->forget('order_id');
        return view('burger_maker.pages.frontend.success', compact('order', 'order_details'));
    }
}
