<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyWebController extends Controller
{
    public function Home(){
        return view('Home');
    }
    public function Products(){
        return view('Products');
    }
    public function News($news_id){
        switch($news_id){
            case 1:
                return view('News1');
                break;
            case 2:
                return view('News2');
                break;
            default:
                echo "Berita tidak ada! \n";
                break;
        }
    }
    public function Program(){
        return view('Program');
    }
    public function AboutUs(){
        return view('AboutUs');
    }
}
