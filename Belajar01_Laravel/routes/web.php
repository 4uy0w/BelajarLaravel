<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "<h1>Hi! Selamat Datang di Website Laravel</h1>";
});

Route::get('/about',function () {
    echo "<h2> Nama: Aldebaran sabian fatihah </h2>";
    echo "<h2> Kelas: 11 RPB </h2>";
    echo "<h2> NIS: 24988 </h2>";
});

Route::get('/article/{id}',function ($id) {
    switch($id){
    case 1:
        echo "ini adalah artikel halaman pertama \n";
        break;
    case 2:
        echo "ini adalah artikel halaman kedua \n";
        break;
    default:
        echo "halaman tidak di temukan!, silahkan cari lagi~ \n";
        break;
    }
});

