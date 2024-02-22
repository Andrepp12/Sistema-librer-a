<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table="trabajadores";
    protected $primaryKey="idTrabajador";
    public $timestamps=false;
    protected $fillable=["idRol","nombreT","correo","cv_dia","cv_mes","cv_ano","estado"];

    public function rol(){
        return $this->hasOne(Tipo::class,'idRol','idRol');
    }

    public function detalle_planillas(){
        return $this->hasMany(Detalle_planilla::class,'idTrabajador','idTrabajador');
    }

    public function asistencias(){
        return $this->hasMany(Asistencia::class,'idTrabajador','idTrabajador');
    }
}
