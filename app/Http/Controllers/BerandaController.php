<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index(){
        return view('frontend/home');
    }
}
