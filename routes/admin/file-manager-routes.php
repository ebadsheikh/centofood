<?php

use App\Http\Controllers\Admin\FileManagerController;
use Illuminate\Support\Facades\Route;

Route::controller(FileManagerController::class)
    ->group(function () {
        Route::get('filemanager', 'index')->name('file.index');
        Route::get('media/create', 'create')->name('media.create');
        Route::post('filemanager/upload', 'upload')->name('media.upload');
        Route::post('file/store', 'store')->name('file.store');
        Route::get('/file/get-image/{id}', 'getImage');
        Route::post('/file/{id}', 'destroy')->name('file.destroy');
    });
