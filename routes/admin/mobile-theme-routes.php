<?php

use App\Http\Controllers\Admin\AppThemeController;
use Illuminate\Support\Facades\Route;

Route::controller(AppThemeController::class)
    ->prefix('mobile/theme')
    ->name('mobile.theme.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update/{app_theme}', 'update')->name('update');
    });
