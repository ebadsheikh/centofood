<?php

use App\Http\Controllers\Admin\DiscountTypeController;
use Illuminate\Support\Facades\Route;

Route::controller(DiscountTypeController::class)
    ->prefix('discount/type')
    ->name('discount.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{discount:slug}', 'edit')->name('edit');
        Route::post('update/{discount:slug}', 'update')->name('update');
        Route::get('delete/{discount:slug}', 'destroy')->name('delete');
    });
