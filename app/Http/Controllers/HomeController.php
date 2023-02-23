<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function acara12(){
        return view('home');
    }
    public function beranda(){
        return view('template');
    }
}
