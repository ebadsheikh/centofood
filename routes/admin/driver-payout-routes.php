<?php

use App\Http\Controllers\Admin\DriverPayoutController;
use Illuminate\Support\Facades\Route;

Route::controller(DriverPayoutController::class)
    ->prefix('drivers/payout')
    ->name('drivers_payout.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('delete/{driver_payout}', 'destroy')->name('delete');
    });
