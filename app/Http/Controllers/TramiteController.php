<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tramite;
use App\Muni;
class TramiteController extends Controller
{
    public function all(){
      $tramites =  Tramite::paginate(20);
      // return view('tramites/{id}', compact('tramites'));
      // return view('tramites',compact('tramites'));
      return view('tramites/{id}', compact('tramites'));
    }
    public function online(){
      return view('tramites-online'); // utilizado solo para presentar link externos
    }
    public function find($id){
      $tramites = Tramite::find($id);
      $munis = Muni::find($id);
      $vac=compact('tramites','munis');
      return view('tramites',$vac);
    }
    public function agregar(){
      $munis = Muni::all();
      $vac = compact("munis");
      return view('agregar-tramite',$vac);
    }
}
