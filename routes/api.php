<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PaymentController;
use Illuminate\Support\Facades\Route;

// Public routes

Route::apiResource('categories', CategoryController::class);

Route::apiResource('products', ProductController::class);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);


// Protected routes

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/orders/{order}/payment', [PaymentController::class, 'pay']);

    Route::apiResource('orders', OrderController::class)
        ->only([
            'index',
            'store',
            'show',
        ]);
});
