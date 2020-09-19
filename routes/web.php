<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'Orders\OrdersController@order')->name('dashboard');
 

Route::post('/submit_order', 'Orders\OrdersController@placeOrder');
Route::get('/check_order', 'Orders\OrdersController@orderCheck');
Route::post('/get_id', 'Orders\OrdersController@getOrderId');
Route::post('/confirm_pickup', 'Orders\OrdersController@confirmPickup');