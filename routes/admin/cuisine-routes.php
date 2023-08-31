<?php

use App\Http\Controllers\Admin\CuisineController;
use Illuminate\Support\Facades\Route;

Route::controller(CuisineController::class)
    ->prefix('cuisine')
    ->name('cuisine.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{cuisine:slug}', 'edit')->name('edit');
        Route::post('update/{cuisine:slug}', 'update')->name('update');
        Route::get('delete/{cuisine:slug}', 'destroy')->name('delete');
    });
