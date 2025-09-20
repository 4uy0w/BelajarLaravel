<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShrineComicsController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('ShrineComics',ShrineComicsController::class);
