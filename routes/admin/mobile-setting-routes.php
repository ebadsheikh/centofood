<?php

use App\Http\Controllers\Admin\MobileSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(MobileSettingController::class)
    ->prefix('mobile/setting')
    ->name('mobile.setting.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
    });
