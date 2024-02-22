<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevolucionGeneralDetalle extends Model
{
    use HasFactory;
    protected $table='detalledevoluciongeneral';
    protected $primaryKey="idDevolucion_G";
    public $timestamps=false;
    protected $fillable=['idrecurso','cantidad'];
}
