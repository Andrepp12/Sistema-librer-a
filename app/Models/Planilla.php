<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    use HasFactory;
    protected $table="planillas";
    protected $primaryKey="idPlanilla";
    public $timestamps=false;
    protected $fillable=["mes","ano","estado"];

    public function detalle_planillas(){
        return $this->hasMany(Detalle_planilla::class,'idPlanilla','idPlanilla');
    }
}
