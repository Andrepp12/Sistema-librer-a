<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $table="tipos";
    protected $primaryKey="idRol";
    public $timestamps=false;
    protected $fillable=["nombreR","sueldo"];


    public function trabajadores(){
        return $this->hasMany(Trabajador::class,'idRol','idRol');
    }
}
