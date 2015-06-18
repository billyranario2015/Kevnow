<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', 'homeController@index' );
Route::get( 'city/{id}', 'homeController@city' );
Route::get( 'order/{name}/{size}' , 'orderController@placedOrder' );
Route::get( 'order/confirmation' , 'orderController@confirmOrder' );
Route::get( 'order/payment' , 'orderController@processPayment' );
Route::get( 'order/success' , 'orderController@paymentSuccess' );

