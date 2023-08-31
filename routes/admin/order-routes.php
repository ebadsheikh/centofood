<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

Route::controller(OrderController::class)
    ->prefix('orders')
    ->name('orders.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit', 'edit')->name('edit');
        Route::post('update/{order}', 'update')->name('update');
        Route::get('delete/{order}', 'destroy')->name('delete');
    });
