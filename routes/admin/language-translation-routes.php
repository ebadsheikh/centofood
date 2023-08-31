<?php

use App\Http\Controllers\Admin\LanguageTranslationController;
use Illuminate\Support\Facades\Route;

Route::controller(LanguageTranslationController::class)->group(function () {
    Route::get('languages', 'index')->name('languages');
    Route::post('translations/update', 'transUpdate')->name('translation.update.json');
    Route::post('translations/updateKey', 'transUpdateKey')->name('translation.update.json.key');
    Route::get('translations/destroy/{key}', 'destroy')->name('translations.destroy');
    Route::post('translations/create', 'store')->name('translation.store');
    Route::get('add/Language', 'createLanguage')->name('addLanguage');
    Route::post('create/Language', 'addLanguage')->name('createLanguage');
    Route::get('create/config', 'newlyConfig')->name('newlyConfig');
    Route::get('/delete/{language}', 'deleteLanguage')->name('delete');
});
