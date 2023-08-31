<?php

use App\Http\Controllers\Admin\MailSettingController;
use Illuminate\Support\Facades\Route;

Route::controller(MailSettingController::class)
    ->prefix('mail')
    ->name('mail.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update{mailsetting}', 'update')->name('update');
    });
