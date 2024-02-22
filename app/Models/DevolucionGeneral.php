<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevolucionGeneral extends Model
{
    use HasFactory;
    protected $table="devolucion_general";
    protected $primaryKey="idDevolucion_G";
    public $timestamps=false;
    protected $fillable=["idDevolucion","fechag","motivo","estado"];
}
