<?php

use App\Http\Controllers\Admin\PrivacyPolicyController;
use Illuminate\Support\Facades\Route;

Route::controller(PrivacyPolicyController::class)
    ->prefix('privacy/policy')
    ->name('privacy.policy.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{privacyPolicy:slug}', 'edit')->name('edit');
        Route::post('update/{privacyPolicy:slug}', 'update')->name('update');
        Route::get('delete/{privacyPolicy:slug}', 'destroy')->name('delete');
    });
