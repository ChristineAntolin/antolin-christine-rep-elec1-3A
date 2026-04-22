<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/upload', [PhotoController::class, 'index'])->name('photos.index');
Route::post('/photos/single', [PhotoController::class, 'storeSingle'])->name('photos.store.single');
Route::post('/photos/multiple', [PhotoController::class, 'storeMultiple'])->name('photos.store.multiple');
Route::delete('/photos/{id}', [PhotoController::class, 'destroy'])->name('photos.destroy');