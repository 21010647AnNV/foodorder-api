<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AccessHistoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('order-items', OrderItemController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('foods', FoodController::class);
Route::apiResource('drinks', DrinkController::class);
Route::apiResource('invoices', InvoiceController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('access-histories', AccessHistoryController::class);