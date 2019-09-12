<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      return view('inicio');
    }

    public function working(){
      return view('working');
    }

    public function admin(){
      return view('admin');
    }

    public function index(){
      return view('inicio');
    }
}
