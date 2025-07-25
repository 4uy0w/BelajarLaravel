<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "<h1> Hai, selamat datang di website Laravel! </h1>";
    }
    public function about(){
        echo "<h2> Nama : Aldebaran sabian fatihah </h2>";
        echo "<h2> Kelas : 11-RPB </h2>";
        echo "<h2> NIS : 24988 </h2>";
    }
    public function articles($id){
        switch($id){
        case 1:
            echo "<h1> Ini adalah halaman artikel pertama </h1>";
            break;
        case 2:
            echo "<h1> Ini adalah halaman artikel kedua </h1>";
            break;
        case 3:
            echo "<h1> Ini adalah halaman artikel ketiga </h1>";
            break;
        default:
            echo "<h1> Halaman tidak ditemukan!, silahkan cari yang lain... </h1>";
            break;
        }
    }
}
