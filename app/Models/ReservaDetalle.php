<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaDetalle extends Model
{
    use HasFactory;
    protected $table='detallereserva';
    protected $primaryKey="idreserva";
    public $timestamps=false;
    protected $fillable=['idrecurso','cantidad'];
}
