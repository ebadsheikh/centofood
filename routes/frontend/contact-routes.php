<?php

use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;

Route::controller(ContactController::class)
    ->prefix('contact')
    ->name('contact.')
    ->group(function () {
        Route::get('index', 'index')->name('show');
        Route::post('store', 'store')->name('store');
        Route::get('delete', 'delete')->name('delete');
    });
