<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\tramite;

class Muni extends Model
{
    public $guarded=[];
    public $fillable=['id','name','mapUrl'];
    public function tramites() {
      return $this->hasMany("App\Tramite", "muni_id");
    }
}
