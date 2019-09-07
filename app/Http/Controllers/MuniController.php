<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muni;
use App\Tramite;

class MuniController extends Controller
{
    public function all(){

      $munis =  Muni::paginate(20);
      $vac=compact("munis");
      return view('municipalidades',$vac);
    }

    public function detail($id){

      $muni = Muni::find($id);
      $tramites = Tramite::where('munis_id','=',$id)->get();
      $vac=compact("muni","tramites");
      return view('tramites',$vac);
    }
}
