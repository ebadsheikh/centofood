<?php

use App\Http\Controllers\Admin\GlobalSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(GlobalSettingController::class)
    ->prefix('global/setting')
    ->name('global.setting.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update/{setting}', 'update')->name('update');
        Route::get('delete/{setting}', 'destroy')->name('delete');
    });
