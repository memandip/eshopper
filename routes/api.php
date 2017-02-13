<?php

use Illuminate\Http\Request;

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

//Customer API Rotues

Route::get('get/customers/{offset}', 'CustomerController@getCustomers');
Route::get('customer/{id}/activate', 'CustomerController@activate');
Route::get('customer/{id}/deactivate', 'CustomerController@deactivate');


