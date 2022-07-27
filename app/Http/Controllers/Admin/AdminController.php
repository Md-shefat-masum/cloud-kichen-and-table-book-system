<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodManu;
use App\Models\Order;
use App\Models\OrderBookedTable;
use App\Models\OrderDetails;
use App\Models\OrderIngredient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function get_orders()
    {
        return Order::orderBy('id', 'DESC')->with('order_details')->get();
    }

    public function get_order($get_order_id)
    {
        $get_order = Order::where('id', $get_order_id)
            ->with([
                'order_details' => function($q){
                    return $q->with([
                        'order_ingredients'
                    ]);
                },
                'order_booked_tables',
            ])->first();

        $get_order->date = Carbon::parse($get_order->date)->format('d-F-Y');
        $get_order->start_time = Carbon::parse($get_order->start_time)->format('h:i a');
        $get_order->end_time = Carbon::parse($get_order->end_time)->format('h:i a');
        $get_order->specific_time_watch_value = Carbon::parse($get_order->specific_time_watch_value)->format('h:i a');

        return $get_order;
    }

    public function at_a_glance()
    {
        return [
            'total_order' => Order::count(),
            'today_order' => Order::whereDate('created_at',Carbon::today())->count(),
            'completed_order' => Order::where('status','completed')->count(),
            'canceled_order' => Order::where('status','canceled')->count(),
            'cash_order' => Order::where('payment_type','cash')->count(),
            'card_order' => Order::where('payment_type','card')->count(),
        ];
    }

    public function food_menus()
    {
        return FoodManu::get();
    }

    public function get_food_menu(FoodManu $food_menu)
    {
        return $food_menu;
    }

    public function complete_order(Request $request)
    {
        $order = Order::find($request->id);
        $order->status = 'completed';
        $order->payment_status = 'paid';
        $order->save();

        return $this->get_order($request->id);
    }

    public function store_food_menu(Request $request)
    {
        // return request()->all();
        // $FoodManu = FoodManu::create(request()->only('title'));

        $FoodManu = new FoodManu();
        $FoodManu->title = $request->title;
        $FoodManu->save();

        $FoodManu->ingredients = $request->ingredient;
        $folder_name = 'uploads/food/' . str_replace(' ', '_', $FoodManu->title) . $FoodManu->id;

        if (request()->hasFile('thumb_image')) {
            $FoodManu->thumb_image = '/' . Storage::put($folder_name, $request->file("thumb_image"));
        }
        if (request()->hasFile('base_bottom_image')) {
            $FoodManu->base_bottom_image = '/' . Storage::put($folder_name, $request->file("base_bottom_image"));
        }
        if (request()->hasFile('base_top_image')) {
            $FoodManu->base_top_image = '/' . Storage::put($folder_name, $request->file('base_top_image'));
        }

        $ingredients = [];
        foreach ($FoodManu->ingredients as $key => $item) {
            $item = (object) $item;
            if (isset($item->image) && is_file($item->image)) {
                $item->image = '/' . Storage::put($folder_name, $item->image);
                $ingredients[] = $item;
            }
        }

        $FoodManu->ingredients = json_encode($ingredients);

        $FoodManu->save();

        return [
            $ingredients,
            $FoodManu,
            request()->all(),
        ];
    }
    public function update_food_menu(Request $request)
    {
        // return request()->all();
        // $FoodManu = FoodManu::create(request()->only('title'));

        $FoodManu = FoodManu::find($request->id);
        $FoodManu->title = $request->title;
        $FoodManu->save();

        $folder_name = 'uploads/food/' . str_replace(' ', '_', $FoodManu->title) . $FoodManu->id;

        if (request()->hasFile('thumb_image')) {
            $FoodManu->thumb_image = '/' . Storage::put($folder_name, $request->file("thumb_image"));
        }
        if (request()->hasFile('base_bottom_image')) {
            $FoodManu->base_bottom_image = '/' . Storage::put($folder_name, $request->file("base_bottom_image"));
        }
        if (request()->hasFile('base_top_image')) {
            $FoodManu->base_top_image = '/' . Storage::put($folder_name, $request->file('base_top_image'));
        }

        $ingredients = json_decode($FoodManu->ingredients);
        foreach ($request->ingredient as $key => $item) {
            $item = (object) $item;

            if (!isset($ingredients[$key])) {
                $ingredients[] = (object) [
                    'title' => null,
                    'price' => null,
                    'image' => null,
                ];
            }

            $ingredients[$key]->title = $item->title;
            $ingredients[$key]->price = $item->price;
            if (isset($item->image) && is_file($item->image)) {
                $item->image = '/' . Storage::put($folder_name, $item->image);
                $ingredients[$key] = $item;
            }
        }
        $FoodManu->ingredients = json_encode($ingredients);

        $FoodManu->save();

        return [
            $ingredients,
            $FoodManu,
            request()->all(),
        ];
    }

    public function delete_food_menu(Request $request)
    {
        return FoodManu::where('id', $request->id)->delete();
    }

    public function delete_order(Request $request)
    {
        Order::where('id',$request->id)->delete();
        OrderBookedTable::where('order_id',$request->id)->delete();
        OrderDetails::where('order_id',$request->id)->delete();
        OrderIngredient::where('order_id',$request->id)->delete();

        return true;
    }
}
