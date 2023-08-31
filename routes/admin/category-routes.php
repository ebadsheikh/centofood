<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)
    ->prefix('category')
    ->name('category.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{category:slug}', 'edit')->name('edit');
        Route::post('update/{category:slug}', 'update')->name('update');
        Route::get('delete/{category:slug}', 'destroy')->name('delete');
    });
