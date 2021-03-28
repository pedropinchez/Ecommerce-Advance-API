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

Route::apiResource('business', 'BusinessController');
Route::apiResource('sliders', 'SliderController');
Route::get('sliders-frontend', 'SliderController@getAllSliderForFrontend');
Route::get('business/bin/{id}', 'BusinessController@getBusinessByBin');
Route::get('shops', 'BusinessController@getShopList');

Route::apiResource('tax', 'TaxController');
Route::get('tax/business/{business_id}', 'TaxController@getTaxByBusiness');

Route::apiResource('locations', 'BusinessLocationController');
Route::get('locations/business/{business_id}', 'BusinessLocationController@findLocationByBusiness');

Route::apiResource('wishlist', 'WishlistController');
Route::apiResource('currencies', 'CurrencyController');
