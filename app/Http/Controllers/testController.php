<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function contact(){
        return view("contact");
    }
    public function about(){
        return view("about");
    }
    public function guide(){
        return view("guide");
    }
}
