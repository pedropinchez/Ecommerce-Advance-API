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
Route::get('brands/business/{business_id}', 'BusinessController@getBrandByBusiness');

Route::apiResource('categories', 'CategoryController');
Route::get('categories/business/{business_id}', 'CategoryController@getCategoryByBusiness');

Route::apiResource('units', 'UnitController');
Route::get('units/business/{business_id}', 'UnitController@getUnitByBusiness');

Route::apiResource('attributes', 'AttributeController');
Route::get('attributes/business/{business_id}', 'AttributeController@getAttributeByBusiness');
Route::get('attributes/category/{category_id}', 'AttributeController@getAttributeByCategory');
Route::get('attributes/{business_id}/{category_id}', 'AttributeController@getAttributeByCategoryAndBusiness');

Route::apiResource('attribute/values', 'AttributeValueController');
Route::get('attribute/{attribute_id}/values', 'AttributeValueController@getAttributeValueByAttribute');

Route::apiResource('items', 'ItemController');
