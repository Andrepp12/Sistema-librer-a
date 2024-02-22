<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    use HasFactory;
    protected $table='detalleventa';
    protected $primaryKey="idventa";
    public $timestamps=false;
    protected $fillable=['idrecurso','cantidad'];
}
