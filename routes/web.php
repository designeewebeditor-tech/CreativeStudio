<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::name('design.')->group(function () {
    Route::get('/', [MainController::class, 'designs'])->name('all');
    Route::get('/designs/{id}', [MainController::class, 'design'])->name('context');

    Route::post('/', [MainController::class, 'designsLang'])->name('set.designs.lang');
    Route::post('/designs/{id}', [MainController::class, 'designLang'])->name('set.design.lang');
});

Route::fallback([MainController::class, 'errorPage'])->name('error.page');
