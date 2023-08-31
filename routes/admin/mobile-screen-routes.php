<?php

use App\Http\Controllers\Admin\MobileScreenController;
use Illuminate\Support\Facades\Route;

Route::controller(MobileScreenController::class)
    ->prefix('mobile/screen')
    ->name('mobile.screen.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update/{mobile_screen}', 'update')->name('update');
    });
