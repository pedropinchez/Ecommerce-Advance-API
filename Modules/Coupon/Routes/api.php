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

// Route::middleware('auth:api')->get('/coupon', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('coupons', 'CouponController');
Route::get('coupons/types/list', 'CouponTypeController@getCouponTypes');