<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tramite;

class TramiteController extends Controller
{
    public function all(){
      $tramites =  Tramite::paginate(20);
      return view('tramites/{id}', compact('tramites'));
    }
}
