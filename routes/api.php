<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailsController;
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
Route::get("customers",[CustomerController::class,"index"]);
Route::post("customers",[CustomerController::class,"create"]);

//order details route
Route::get("order_details",[OrderDetailsController::class,"index"]);
Route::post("order_details",[OrderDetailsController::class,"create"]);