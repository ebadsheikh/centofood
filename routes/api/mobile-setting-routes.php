<?php

use App\Http\Controllers\Api\AppSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(AppSettingController::class)
    ->prefix('mobile')
    ->name('mobile.')
    ->group(function () {
        Route::get('setting', 'index')->name('setting');
    });
