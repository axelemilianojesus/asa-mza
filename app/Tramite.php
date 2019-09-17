<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Muni;
class Tramite extends Model
{
  protected $fillable = ['title', 'description', 'file','muni_id'];
  
  public $guarded=[];
      public function muni() {
        return $this->belongsTo("App\Muni", "muni_id");
      }
      public function tramite() {
        return $this->belongsTo("App\Tramite", "tramite_id");
      }
}
