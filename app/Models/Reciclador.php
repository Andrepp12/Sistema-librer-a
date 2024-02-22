<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciclador extends Model
{
    use HasFactory;
    protected $table="reciclador";
    protected $primaryKey="IdReciclador";
    public $timestamps=false;
    protected $fillable=["NombreInstitucion","Representante","Contacto","estado"];
}
