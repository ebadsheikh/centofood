<?php

use App\Http\Controllers\Admin\NutritionController;
use Illuminate\Support\Facades\Route;

Route::controller(NutritionController::class)
    ->prefix('nutrition')
    ->name('nutrition.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{nutrition:slug}', 'edit')->name('edit');
        Route::post('update/{nutrition:slug}', 'update')->name('update');
        Route::get('delete/{nutrition:slug}', 'destroy')->name('delete');
    });
