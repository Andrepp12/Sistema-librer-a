<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_planilla extends Model
{
    use HasFactory;
    protected $table="detalle_planillas";
    protected $primaryKey="idDPlanilla";
    public $timestamps=false;
    protected $fillable=["idPlanilla","idTrabajador","sueldo","descuento","bonificacion","desembolso"];

    public function planilla(){
        return $this->hasOne(Planilla::class,'idPlanilla','idPlanilla');
    }

    public function trabajador(){
        return $this->hasOne(Trabajador::class,'idTrabajador','idTrabajador');
    }
}
