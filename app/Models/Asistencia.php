<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;
    protected $table="asistencias";
    protected $primaryKey="idAsistencia";
    public $timestamps=false;
    protected $fillable=["idTrabajador","idFecha","hora_extra","estadoA"];

    public function trabajador(){
        return $this->hasOne(Trabajador::class,'idTrabajador','idTrabajador');
    }

    public function fecha(){
        return $this->hasOne(Fecha::class,'idFecha','idFecha');
    }
}
