<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checkController;
use App\Http\Controllers\resultController;

Route::get('/', function () {
    return view('form');
})->name('home');

Route::post('/check', [checkController::class, 'submitEntry'])->name('submitEntryRoute');

Route::get('/result/{id}', [resultController::class, 'showResult'])->name('result');
