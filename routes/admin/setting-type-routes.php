<?php

use App\Http\Controllers\Admin\SettingTypeController;
use Illuminate\Support\Facades\Route;

Route::controller(SettingTypeController::class)
    ->prefix('setting/type')
    ->name('settingType.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{SettingType:slug}', 'edit')->name('edit');
        Route::post('update/{SettingType:slug}', 'update')->name('update');
        Route::get('delete/{SettingType:slug}', 'destroy')->name('delete');
    });
