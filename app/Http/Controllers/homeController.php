<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){ //homepage
        return view('index');
    }
    
    public function contact(){ //contact us
        return view('contact');
    }

    public function about(){ //about us
        return view('about');
    }
}
