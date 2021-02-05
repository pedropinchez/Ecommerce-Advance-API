<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Role\Http\Controllers\PermissionController;
use Modules\Role\Http\Controllers\RoleController;

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

Route::group(['middleware' => 'auth:api', 'prefix' => 'roles'], function () {
    Route::get('getAllRoles', [RoleController::class, 'getAllRoles']);
    Route::post('check-permission', [PermissionController::class, 'checkPermission']);
    Route::post('give-permission', [PermissionController::class, 'givePermission']);
    Route::get('getAllPermission', [PermissionController::class, 'getAllPermission']);
    Route::get('getAllPermissionByRole/{role_id}', [PermissionController::class, 'getAllPermissionByRole']);
    Route::post('storePermission', [PermissionController::class, 'storePermission']);
 });
