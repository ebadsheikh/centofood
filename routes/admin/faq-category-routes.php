<?php

use App\Http\Controllers\Admin\FaqCategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(FaqCategoryController::class)
    ->prefix('faq/category')
    ->name('faqCategory.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{faqCategory:slug}', 'edit')->name('edit');
        Route::post('update/{faqCategory:slug}', 'update')->name('update');
        Route::get('delete/{faqCategory:slug}', 'destroy')->name('delete');
    });
