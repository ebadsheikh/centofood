<?php

use App\Http\Controllers\Admin\TermAndConditionController;
use Illuminate\Support\Facades\Route;

Route::controller(TermAndConditionController::class)
    ->prefix('term/condition')
    ->name('term.condition.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('edit/{termAndCondition:slug}', 'edit')->name('edit');
        Route::post('update/{termAndCondition:slug}', 'update')->name('update');
    });
