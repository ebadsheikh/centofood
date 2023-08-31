<?php

use App\Http\Controllers\Admin\MassUnitController;
use Illuminate\Support\Facades\Route;

Route::controller(MassUnitController::class)
    ->prefix('mass/unit')
    ->name('unit.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{unit:slug}', 'edit')->name('edit');
        Route::post('update/{unit:slug}', 'update')->name('update');
        Route::get('delete/{unit:slug}', 'destroy')->name('delete');
    });
