<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::controller(RoleController::class)
    ->prefix('role')
    ->name('role.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{role}', 'edit')->name('edit');
        Route::post('update/{role}', 'update')->name('update');
        Route::get('delete/{role}', 'destroy')->name('delete');
    });
