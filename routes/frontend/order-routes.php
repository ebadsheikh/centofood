<?php

use App\Http\Controllers\Frontend\OrderController;
use Illuminate\Support\Facades\Route;

Route::controller(OrderController::class)
    ->prefix('order')
    ->name('order.')
    ->group(function () {
        Route::get('stripe', 'stripe')->name('stripe');
        Route::post('stores', 'storeOrder')->name('store');
        Route::get('checkout', 'checkout')->name('checkout.index');
        Route::post('storeStripe', 'storeStripe')->name('storeStripe');
    });
