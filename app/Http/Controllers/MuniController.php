<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muni;

class MuniController extends Controller
{
    public function all(){
      $munis =  Muni::paginate(20);
      return view('municipalidades', compact('munis'));
    }


}
