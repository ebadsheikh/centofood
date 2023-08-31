<?php

use App\Http\Controllers\Admin\PermissionController;
use Illuminate\Support\Facades\Route;

Route::controller(PermissionController::class)
    ->prefix('permission')
    ->name('permission.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{permission}', 'edit')->name('edit');
        Route::post('update{permission}', 'update')->name('update');
        Route::get('delete/{permission}', 'destroy')->name('delete');
        Route::get('synchronize', 'synchronize')->name('synchronize');
    });
