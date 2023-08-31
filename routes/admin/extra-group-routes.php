<?php

use App\Http\Controllers\Admin\ExtraGroupController;
use Illuminate\Support\Facades\Route;

Route::controller(ExtraGroupController::class)
    ->prefix('extra/group')
    ->name('extra_group.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{extra_group:slug}', 'edit')->name('edit');
        Route::post('update/{extra_group:slug}', 'update')->name('update');
        Route::get('delete/{extra_group:slug}', 'destroy')->name('delete');
    });
