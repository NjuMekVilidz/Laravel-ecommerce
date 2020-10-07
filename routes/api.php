<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', \App\Http\Controllers\API\ProductController::class);
Route::resource('orders', \App\Http\Controllers\API\OrderController::class);
Route::resource('order-items', \App\Http\Controllers\API\OrderItemController::class);
Route::resource('payment-types', \App\Http\Controllers\API\PaymentTypeController::class);
Route::resource('shipping-types', \App\Http\Controllers\API\ShippingTypeController::class);
Route::resource('product-images', \App\Http\Controllers\API\ProductImageController::class);
Route::resource('categories', \App\Http\Controllers\API\CategoryController::class);
Route::resource('product-categories', \App\Http\Controllers\API\ProductCategoryController::class);
Route::resource('product-details', \App\Http\Controllers\API\ProductDetailController::class);
Route::resource('wishlist', \App\Http\Controllers\API\WishListController::class);
Route::resource('wishlist-items', \App\Http\Controllers\API\WishListItemController::class);
Route::resource('addresses', \App\Http\Controllers\API\AddressController::class);
Route::resource('users', \App\Http\Controllers\API\UserController::class);

