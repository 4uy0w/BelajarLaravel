<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//request without parameter on URL
Route::get('siswa',function ($id){
    //code here for siswa with method GET
});
Route::post('siswa',function ($id){
    //code here for siswa with method POST
});
Route::put('siswa',function ($id){
    //code here for siswa with method PUT 
});
Route::delete('siswa',function ($id){
    //code here for siswa with method DELETE
});

//request with parameter on URL
Route::get('siswa/{id}',function ($id){
    switch($id){
        case 1:
            return "Ini adalah halaman siswa Sabian";
        case 2:
            return "Ini adalah halaman siswa Aldebaran";
        default:
            return "Halaman tidak ada!";
    }
});
Route::post('siswa/{id}',function($id){
    // --- || ---
});
Route::put('siswa/{id}',function ($id){
    // --- || ---
});
Route::delete('siswa/{id}',function ($id){
    // --- || ---
});