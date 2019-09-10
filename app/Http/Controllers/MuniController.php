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
    public function detail($id){ // esto nos trae todos los tramites de 1 muni
      $munis = Muni::find($id);
      $tramites = Tramite::where('munis_id','=',$id)->get();
      $vac=compact("munis","tramites");
      return view('tramites',$vac);
    }
}
