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

Route::apiResource('brands', 'BrandController');
Route::get('business/{business_id}', 'BusinessController@getBrandByBusiness');
Route::apiResource('categories', 'CategoryController');
Route::apiResource('units', 'UnitController');
Route::apiResource('items', 'ItemController');
