<?php

use App\Http\Controllers\Admin\FaqController;
use Illuminate\Support\Facades\Route;

Route::controller(FaqController::class)
    ->prefix('faq')
    ->name('faq.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{faq:slug}', 'edit')->name('edit');
        Route::post('update/{faq:slug}', 'update')->name('update');
        Route::get('delete/{faq:slug}', 'destroy')->name('delete');
    });
