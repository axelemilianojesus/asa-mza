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
      //reglas de validacion para guardar el archivo
      $rules=[
        "title"=> "required|string|min:6|max:200",
        "description"=>"required|string|min:10|max:200",
        "muni"=>"required",
        "file"=>"required"
      ];

      $this->validate($req,$rules);
      $routeFile = $req['file']->store("public");
      $fileName = basename($routeFile);


      // aqui es dnd pasamos los parametros y guardamos
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

        $file_name = $tramiteDelete['file']; //obtengo el nombre del archivo

        $file_path =storage_path()."/app/public/"; // obtengo la ubicacion del archivo
        $tramiteRuoteDelete= $file_path .$file_name; // completo la ubicacion con el nombre del tramite


        unlink($tramiteRuoteDelete); //elimina el archivo de la carpeta public
        $tramiteDelete -> delete(); // elimina el archivo de la BD

        return redirect("/municipalidades");
      }
}
