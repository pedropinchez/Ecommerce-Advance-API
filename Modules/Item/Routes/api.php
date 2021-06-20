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
// Route::get('brands/business/{business_id}', 'BusinessController@getBrandByBusiness');

Route::apiResource('categories', 'CategoryController');
Route::get('categories/business/{business_id}', 'CategoryController@getCategoryByBusiness');
Route::get('categories/sub-categories/{parent_category_id}', 'CategoryController@getSubCategoriesByParentID');

Route::apiResource('units', 'UnitController');
Route::get('units/business/{business_id}', 'UnitController@getUnitByBusiness');

// Featured Item routes
Route::post('items/featured/toggle', 'FeaturedItemsController@toggleFeaturedItem');

Route::apiResource('attributes', 'AttributeController');
Route::get('attributes/business/{business_id}', 'AttributeController@getAttributeByBusiness');
Route::get('attributes/category/{category_id}', 'AttributeController@getAttributeByCategory');
Route::get('attributes/{business_id}/{category_id}', 'AttributeController@getAttributeByCategoryAndBusiness');

Route::apiResource('attribute/values', 'AttributeValueController');
Route::get('attribute/by-attribute/{attribute_id}/values', 'AttributeValueController@getAttributeValueByAttribute');

Route::apiResource('items', 'ItemController');
Route::get('items/business/{business_id}', 'ItemController@getItemByBusiness');
Route::get('items/category/{category_id}', 'ItemController@getItemByCategory');
Route::get('items/subcategory/{sub_category_id}', 'ItemController@getItemBySubCategory');
Route::get('items/brand/{brand_id}', 'ItemController@getItemByBrand');
Route::put('items/attribute/{item_id}', 'ItemController@updateItemAttribute');
Route::post('items/{item_id}/upload', 'ItemController@uploadFile');
Route::delete('items/image/{image_id}/delete', 'ItemController@destroyImage');
Route::get('items/all/for-dropdown', 'ItemController@getItemsForDropdown');

/**
 * Frontend Routes
 */
Route::get('get-items', 'ItemController@getProductList');
Route::get('get-item-detail/{slug}', 'ItemController@getProductDetail');
Route::get('get-flash-sale-items/{sortBy}', 'ItemController@getFlashSaleItems');
Route::get('get-category-products/{no}', 'CategoryController@getCategoryByProductForHomePage');
Route::get('frontend-categories', 'CategoryController@categoryListFrontend');
Route::get('get-items/search', 'ItemController@searchItemFrontend');

// Frontend - Item Review
Route::get('item-review/get-by-item', 'ItemRatingsController@index');
Route::post('item-review/create', 'ItemRatingsController@store');
Route::put('item-review/update-status', 'ItemRatingsController@updateStatus');
Route::delete('item-review/delete', 'ItemRatingsController@destroy');
