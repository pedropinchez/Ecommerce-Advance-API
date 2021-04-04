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


Route::apiResource('customer', 'CustomerController');
Route::apiResource('address', 'AddressController');
// Route::prefix('customer')->group(function () {
//     Route::get('/', 'CustomerController@index');
//     Route::post('/store', 'CustomerController@store');
//     Route::delete('/destroy', 'CustomerController@destroy');
//     Route::put('/update', 'CustomerController@update');
// });
