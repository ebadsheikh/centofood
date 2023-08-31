<?php

use App\Http\Controllers\Api\OrderController;
use Illuminate\Support\Facades\Route;

Route::controller(OrderController::class)
    ->prefix('order')
    ->group(function () {
        Route::get('', 'index');
        Route::post('create', 'store');
    });
