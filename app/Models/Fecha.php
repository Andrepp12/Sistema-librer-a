<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;
    protected $table="fechas";
    protected $primaryKey="idFecha";
    public $timestamps=false;
    protected $fillable=["dia","mes","ano"];


    public function asistencias(){
        return $this->hasMany(Asistencia::class,'idFecha','idFecha');
    }
}
