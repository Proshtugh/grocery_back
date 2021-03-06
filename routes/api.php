<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ProductAppController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDtlController;
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

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
Route::post('custlogin', [CustomerController::class, 'signin']);
Route::post('custregister', [CustomerController::class, 'signup']);

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('categories', CategoryController::class);
});     

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('fileupload', FileUploadController::class);
});

Route::get('productcategory/{id}', "App\Http\Controllers\ProductAppController@productlist");
Route::get('landcategory3', "App\Http\Controllers\ProductAppController@categorylist_3");
Route::get('landcategory6', "App\Http\Controllers\ProductAppController@categorylist_6");
Route::get('landcategory9', "App\Http\Controllers\ProductAppController@categorylist_9");
Route::get('landcategory12', "App\Http\Controllers\ProductAppController@categorylist_12");
Route::get('landcategory15', "App\Http\Controllers\ProductAppController@categorylist_15");
Route::get('landcategory18', "App\Http\Controllers\ProductAppController@categorylist_18");
Route::get('landcategory21', "App\Http\Controllers\ProductAppController@categorylist_21");
Route::get('landcategory24', "App\Http\Controllers\ProductAppController@categorylist_24");
Route::get('landcategory27', "App\Http\Controllers\ProductAppController@categorylist_27");
Route::get('landcategory30', "App\Http\Controllers\ProductAppController@categorylist_30");
Route::get('landproduct', "App\Http\Controllers\ProductAppController@productlist_8");
Route::get('productall', "App\Http\Controllers\ProductAppController@productAll");
Route::get('userData', "App\Http\Controllers\ProductAppController@userData");

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('orders', OrderController::class);
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('order_dtls', OrderDtlController::class);
});     