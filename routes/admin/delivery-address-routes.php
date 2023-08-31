<?php

use App\Http\Controllers\Admin\DeliveryAddressController;
use Illuminate\Support\Facades\Route;

Route::controller(DeliveryAddressController::class)
    ->prefix('delivery/address')
    ->name('address.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('view', 'view')->name('view');
        Route::get('edit/{address}', 'edit')->name('edit');
        Route::post('update/{address}', 'update')->name('update');
        Route::get('delete/{address}', 'destroy')->name('delete');
    });
