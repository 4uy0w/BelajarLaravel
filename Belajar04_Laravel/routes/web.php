<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloAdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('Hikari',['name' => 'Hikari']);
});
Route::get('/helloAdmin',function () {
    return view('admin.Hello',['nameAdmin' => 'Hikari']);
});
Route::get('/helloAdminController',[HelloAdminController::class,'calling']);

Route::get('/MyLayout',function () {
    return view('children');
});