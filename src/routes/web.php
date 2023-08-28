<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index'])->name('index');
Route::post('/contacts/confirm',[ContactController::class,'confirm'])->name('confirm');
Route::post('/contacts',[ContactController::class,'store'])->name('store');
Route::get('/management',[ContactController::class,'management'])->name('management');
