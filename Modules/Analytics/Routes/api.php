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

Route::get('countries', 'CountriesController@index');
Route::get('countries/bulk-insert', 'CountriesController@insert_countries');
Route::get('cities', 'CitiesController@index');
Route::get('cities/bulk-insert', 'CitiesController@insert_cities_for_bangladesh');
Route::get('areas', 'AreasController@index');
Route::get('areas/bulk-insert', 'AreasController@insert_areas_for_bangladesh');
