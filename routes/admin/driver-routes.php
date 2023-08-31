<?php

use App\Http\Controllers\Admin\DriverController;
use Illuminate\Support\Facades\Route;

Route::controller(DriverController::class)
    ->prefix('driver')
    ->name('driver.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('edit/{user}', 'edit')->name('edit');
        Route::post('update/{driver}', 'update')->name('update');
    });
