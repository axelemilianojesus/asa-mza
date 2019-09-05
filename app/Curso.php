<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //public $table="cursos"; la tabla tiene el nombre en plurar x eso no se utiliza
    //public $primaryKey= "id"; //no se escribe si la PK es id
    //public $timestamps=true; // se va en FALSE si se aclara sino no
    public $guarded=[]; // esto nos dice que columnas NO se puede escribir
    //public $fillable=; esto nos dice que columnas se pueden escribir
}
