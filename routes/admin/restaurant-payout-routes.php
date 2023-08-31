<?php

use App\Http\Controllers\Admin\RestaurantPayoutController;
use Illuminate\Support\Facades\Route;

Route::controller(RestaurantPayoutController::class)
    ->prefix('restaurant/payout')
    ->name('restaurant_payout.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('delete/{payout}', 'destroy')->name('delete');
    });
