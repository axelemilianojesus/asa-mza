<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muni extends Model
{
    public $guarded=[];

    public function tramites() {
      return $this->hasMany("App\Tramite", "muni_id");
    }
}
