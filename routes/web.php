<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('/menu', 'WebsiteController@menu')->name('menu');
Route::get('/cart', 'WebsiteController@cart')->name('cart');
Route::get('/order-list', 'WebsiteController@order_list')->name('order_list');
Route::get('/create-menu-item/{id}', 'WebsiteController@create_menu')->name('create_menu');
Route::post('/checkout-confirm','WebsiteController@checkout_confirm')->name('checkout_confirm');
Route::get('/checkout_success', 'WebsiteController@checkout_success');

Route::post('/check-book-table-status','WebsiteController@check_booked_table_status');
Route::post('/search-orders','WebsiteController@search_orders');
Route::post('/cancel-order','WebsiteController@cancel_order');

Route::get('/p/{p}', function ($p) {
    dd(Hash::make($p));
});
Route::get('/print', function ($p = null) {
    return view('invoice');
});

Route::get('/dashboard', 'Admin\AdminController@index')->middleware('auth');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-reload', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true]);
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--path' => 'vendor/laravel/passport/database/migrations', '--force' => true]);
    \Illuminate\Support\Facades\Artisan::call('passport:install');
    return redirect()->back();
});
