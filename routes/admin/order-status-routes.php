<?php

use App\Http\Controllers\Admin\OrderStatusController;
use Illuminate\Support\Facades\Route;

Route::controller(OrderStatusController::class)
    ->prefix('order/status')
    ->name('status.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{status:slug}', 'edit')->name('edit');
        Route::post('update/{status:slug}', 'update')->name('update');
        Route::get('delete/{status:slug}', 'destroy')->name('delete');
    });
