<?php

use App\Http\Controllers\Api\AppThemeSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(AppThemeSettingController::class)
    ->prefix('mobile')
    ->name('mobile.')
    ->group(function () {
        Route::get('theme', 'index')->name('theme');
    });
