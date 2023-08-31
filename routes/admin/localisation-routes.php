<?php

use App\Http\Controllers\Admin\LocalizationController;
use Illuminate\Support\Facades\Route;

Route::controller(LocalizationController::class)
    ->prefix('localisation')
    ->name('localisation.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
    });
