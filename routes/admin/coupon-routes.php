<?php

use App\Http\Controllers\Admin\CouponController;
use Illuminate\Support\Facades\Route;

Route::controller(CouponController::class)
    ->prefix('coupon')
    ->name('coupon.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{coupon:slug}', 'edit')->name('edit');
        Route::post('update/{coupon:slug}', 'update')->name('update');
        Route::get('delete/{coupon:slug}', 'destroy')->name('delete');
    });
