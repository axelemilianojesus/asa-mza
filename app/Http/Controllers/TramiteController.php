<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tramite;
use App\Muni;
class TramiteController extends Controller
{

    public function online(){
      return view('tramites-online'); // utilizado solo para presentar link externos
    }
    public function find($id){ // devuelve el listado de tramites por munis
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

    public function store(Request $req){
      $rules=[
        "title"=> "required|string|min:6|max:200",
        "descrption"=>"required|string|min:10|max:200",
        "munis_id"=>"required",
        "file"=>"required"
      ];

      // $this->validate($req,$rules);
      $routeFile = $req['file']->store("public");
      $fileName = basename($routeFile);



      $newTramite = new Tramite();
      $newTramite->title = $req->title;
      $newTramite->description = $req->description;
      $newTramite->munis_id = $req->muni;
      $newTramite->file = $fileName;

      $newTramite->save();
      return redirect('/municipalidades/' . $newTramite->munis_id);
      }

      public function delete(Request $req){
        $tramiteDelete = Tramite::find($req->id);
        $tramiteDelete -> delete();
        return redirect("/municipalidades");
      }
}
