<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloAdminController extends Controller
{
    public function calling(){
        return view('admin.Hello');
    }
}