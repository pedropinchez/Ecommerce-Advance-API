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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'LoginController@login');

    Route::post('register', 'CustomerRegisterController@customerRegister');
    Route::post('register-next', 'CustomerRegisterController@customerRegisterNext');

    Route::post('vendor-register', 'VendorRegisterController@vendorRegister')->name('vendor.register');
    Route::post('vendor-register-next', 'VendorRegisterController@vendorRegisterNext')->name('vendor.register.next');

    Route::post('check-user', 'UserController@checkUserIsUnique');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('getUserProfile', 'AuthController@getUserProfile');
        Route::put('updateUserProfile', 'AuthController@updateUserProfile');
        Route::delete('deleteUserAccount', 'AuthController@deleteUserAccount');
    });
});
