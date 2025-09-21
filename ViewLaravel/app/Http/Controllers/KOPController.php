<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KOPController extends Controller
{
    public function show($section = null) {
        return view('index', ['scrollTo' => $section]);
    }
}
