<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Contact; 
use Mail; 

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
    public function cancelpolicy(){ //cancel policy
        return view('cancelpolicy');
    }
    
}
