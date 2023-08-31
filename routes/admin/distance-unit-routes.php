<?php

use App\Http\Controllers\Admin\DistanceUnitController;
use Illuminate\Support\Facades\Route;

Route::controller(DistanceUnitController::class)
    ->prefix('distance/unit')
    ->name('distanceUnit.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{distanceUnit:slug}', 'edit')->name('edit');
        Route::post('update/{distanceUnit:slug}', 'update')->name('update');
        Route::get('delete/{distanceUnit:slug}', 'destroy')->name('delete');
    });
