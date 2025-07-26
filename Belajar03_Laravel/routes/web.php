<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyWebController;

Route::get('/',[CompanyWebController::class,'Home']);
Route::get('/Products',[CompanyWebController::class,'Products']);
Route::get('/News/{news_id}',[CompanyWebController::class,'News']);
Route::get('/Program',[CompanyWebController::class,'Program']);
Route::get('/AboutUs',[CompanyWebController::class,'AboutUs']);

