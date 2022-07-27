<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(
    ['prefix' => 'v1'],
    function () {
        Route::group(['prefix' => '/user', 'middleware' => ['guest:api']], function () {
            Route::post('/get-token', 'Auth\ApiLoginController@get_token');
            Route::post('/api-login', 'Auth\ApiLoginController@login');
            Route::post('/api-register', 'Auth\ApiLoginController@register');
            Route::get('/auth-check', 'Auth\ApiLoginController@auth_check');
            Route::post('/forget-mail', 'Auth\ApiLoginController@forget_mail');
        });

        Route::get('/admin/get-orders','Admin\AdminController@get_orders');
        Route::get('/admin/get-order/{order}','Admin\AdminController@get_order');
        Route::post('/admin/complete-order','Admin\AdminController@complete_order');
        Route::post('/admin/delete-order','Admin\AdminController@delete_order');

        Route::get('/admin/food-menus','Admin\AdminController@food_menus');
        Route::get('/admin/get-food-menu/{food_menu}','Admin\AdminController@get_food_menu');
        Route::post('/admin/store-food-menu','Admin\AdminController@store_food_menu');
        Route::post('/admin/update-food-menu','Admin\AdminController@update_food_menu');
        Route::post('/admin/delete-food-menu','Admin\AdminController@delete_food_menu');
        Route::post('/cancel-order','WebsiteController@cancel_order');
        Route::get('/at-a-glance','Admin\AdminController@at_a_glance');

        Route::group(['middleware' => ['auth:api']], function () {

            Route::group(['prefix' => 'user'], function () {
                Route::post('/api-logout', 'Auth\ApiLoginController@logout');
                Route::post('/user_info', 'Auth\ApiLoginController@user_info');
                Route::post('/check-auth', 'Auth\ApiLoginController@check_auth');
                Route::post('/find-user-info', 'Auth\ApiLoginController@find_user_info');
            });

            Route::group(['prefix' => 'user'], function () {
                Route::post('/update-profile', 'Auth\ProfileController@update_profile');
            });



        });
    }
);
