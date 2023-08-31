<?php

use App\Http\Controllers\Admin\AppSliderController;
use Illuminate\Support\Facades\Route;

Route::controller(AppSliderController::class)
    ->prefix('app/slider')
    ->name('slider.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{slider:slug}', 'edit')->name('edit');
        Route::post('update/{slider:slug}', 'update')->name('update');
        Route::get('delete/{slider:slug}', 'destroy')->name('delete');
    });
