<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
// use App\Tramite;
class Tramite extends Model
{
  public $guarded=[];
      public function muni() {
        return $this->belongsTo("App\Muni", "muni_id");
      }
      public function tramite() {
        return $this->belongsTo("App\Tramite", "tramite_id");
      }
}
