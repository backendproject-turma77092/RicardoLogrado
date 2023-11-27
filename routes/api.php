<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//customers route
Route::get("customer",[CustomerController::class,"index"]);
Route::post("customer",[CustomerController::class,"create"]);
Route::get("customer/{id}",[CustomerController::class,"show"]);
Route::put("customer/{id}",[CustomerController::class,"update"]);

//orders route
Route::get("order",[OrderController::class,"index"]);
Route::post("order",[OrderController::class,"create"]);
Route::get("order/{id}",[OrderController::class,"show"]);
Route::put("order/{id}",[OrderController::class,"update"]);

//products route
Route::get("product",[ProductController::class,"index"]);
Route::post("product",[ProductController::class,"create"]);
Route::get("product/{id}",[ProductController::class,"show"]);
Route::put("product/{id}",[ProductController::class,"update"]);

//suppliers route
Route::get("supplier",[SupplierController::class,"index"]);
Route::post("supplier",[SupplierController::class,"create"]);
Route::get("supplier/{id}",[SupplierController::class,"show"]);
Route::put("supplier/{id}",[SupplierController::class,"update"]);