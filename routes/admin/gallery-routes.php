<?php

use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Support\Facades\Route;

Route::controller(GalleryController::class)
    ->prefix('gallery')
    ->name('gallery.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{gallery}', 'edit')->name('edit');
        Route::post('update/{gallery}', 'update')->name('update');
        Route::get('delete/{gallery}', 'destroy')->name('delete');
    });
