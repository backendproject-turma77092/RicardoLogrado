<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SuppliersController;
use App\Models\OrderDetails;
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

//orders route
Route::get("order",[OrderController::class,"index"]);
Route::post("order",[OrderController::class,"create"]);

//suppliers route
Route::get("supplier",[SupplierController::class,"index"]);
Route::post("supplier",[SupplierController::class,"create"]);

//products route
Route::get("product",[ProductController::class,"index"]);
Route::post("product",[ProductController::class,"create"]);