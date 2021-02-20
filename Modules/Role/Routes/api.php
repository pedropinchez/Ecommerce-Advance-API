<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Role\Http\Controllers\PermissionController;
use Modules\Role\Http\Controllers\RoleController;
use Modules\Role\Http\Controllers\UserController;

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

// Route::group(['middleware' => 'auth:api', 'prefix' => 'roles'], function () {
Route::group(['prefix' => 'roles'], function () {
    // Route::get('getModulePermissionByUserTypeID', 'RoleController@getModulePermissionByUserTypeID');
    Route::get('getModulePermissionByUserTypeID', [RoleController::class, 'getModulePermissionByUserTypeID']);
    Route::get('getModulePermissionByUser', [RoleController::class, 'getModulePermissionByUser']);
    Route::get('getUserTypeList', [RoleController::class, 'getUserTypeList']);
    Route::get('getModuleList', [RoleController::class, 'getModuleList']);
    Route::post('appPermissionStore', [RoleController::class, 'appPermissionStore']);
    Route::post('multipleAppPermissionStore', [RoleController::class, 'multipleAppPermissionStore']);
    Route::get('getAllUser', [UserController::class, 'getAllUser']);
    Route::put('editUser/{id}',[UserController::class, 'editUser']);
    Route::get('userDetails/{id}',[UserController::class, 'userDetails']);
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'roles'], function () {
// Route::group(['prefix' => 'roles'], function () {
    Route::get('getAllRoles', [RoleController::class, 'getAllRoles']);
    Route::post('check-permission', [PermissionController::class, 'checkPermission']);
    Route::post('give-permission', [PermissionController::class, 'givePermission']);
    Route::get('getAllPermission', [PermissionController::class, 'getAllPermission']);
    Route::get('getAllPermissionByRole/{role_id}', [PermissionController::class, 'getAllPermissionByRole']);
    Route::post('storePermission', [PermissionController::class, 'storePermission']);
    Route::post('multipleUserRoleStore', [UserController::class, 'multipleUserRoleStore']);
    Route::put('multipleUserRoleUpdate/{id}', [UserController::class, 'multipleUserRoleUpdate']);

    Route::get('getUserPermissions',[PermissionController::class, 'getUserPermissions']);
    Route::get('getUserRoles',[RoleController::class, 'getUserRoles']);
    Route::get('getUserModules',[PermissionController::class, 'getUserModules']);
});
