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
Route::apiResource('discount-types', 'DiscountController');
Route::get('discount-types/business/{business_id}', 'DiscountController@getDiscountByBusiness');
Route::apiResource('sales', 'SalesController');
Route::get('sales/business/{business_id}', 'SalesController@getSaleByBusiness');
