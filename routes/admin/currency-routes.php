<?php

use App\Http\Controllers\Admin\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::controller(CurrencyController::class)
    ->prefix('currency')
    ->name('currencies.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{currency}', 'edit')->name('edit');
        Route::post('update/{currency}', 'update')->name('update');
        Route::get('delete/{currency}', 'destroy')->name('delete');
    });
