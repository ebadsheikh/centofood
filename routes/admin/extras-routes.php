<?php

use App\Http\Controllers\Admin\ExtraController;
use Illuminate\Support\Facades\Route;

Route::controller(ExtraController::class)
    ->prefix('extra')
    ->name('extra.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{extra:slug}', 'edit')->name('edit');
        Route::post('update/{extra:slug}', 'update')->name('update');
        Route::get('delete/{extra:slug}', 'destroy')->name('delete');
    });
