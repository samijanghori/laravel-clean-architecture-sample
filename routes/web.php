<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


//Order routes
Route::get('/', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);