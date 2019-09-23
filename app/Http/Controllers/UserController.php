<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function perfil(){
      return view('perfil');
    }
    public function downloadFile($src,$file_title){ // metodo para obtener un archivo

      if (is_file($src)) {

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $content_type = finfo_file($finfo, $src);
        finfo_close($finfo);
        $file_name = basename($src).PHP_EOL;
        $extention = explode(".",$file_name); //obtengo la extension del archivo en un array
        $newName = $file_title .".".$extention[1]; // concateno el title con la extension

        $size = filesize($src);
        header("Content-Type: $content_type");
        header("Content-Disposition:attachment; filename=$newName"); // asigno el nombre del archivo con la extension para q se descargue con el nombre y no la ruta
        header("Content-Transfer-Encoding: binary");
        header("Content-Length:$size");
        readfile($src);

        return true;
      } else {
        return false;
      }
    }

    public function download($file_name,$file_title){ // esta funcion es la descargar el archivo recuperado en la funcion de arriba
      if (!$this->downloadFile(storage_path()."/app/public/$file_name",$file_title)) {// si no se ha podido descargar, redireccionamos atras.

        return redirect()->back();
      }
    }
}
