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
Route::apiResource('giftcards', 'GiftCardController');
Route::apiResource('vouchers', 'VoucherController');
Route::apiResource('polls', 'PollController');
Route::get('polls/customer/{id}', 'PollController@getByCustomerId');
Route::apiResource('poll-options', 'PollOptionController');
Route::post('polls-response', 'PollResponseController@store');
