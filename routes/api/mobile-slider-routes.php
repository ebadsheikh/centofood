<?php

use App\Http\Controllers\Api\AppSliderSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(AppSliderSettingController::class)
    ->prefix('mobile')
    ->name('mobile.')
    ->group(function () {
        Route::get('slider', 'index')->name('slider');
    });
