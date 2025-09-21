<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KOPController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/KOP/{section?}', [KOPController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
