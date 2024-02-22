<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperacionDetalle extends Model
{
    use HasFactory;
    protected $table='detalleoperacion';
    protected $primaryKey="idoperacion";
    public $timestamps=false;
    protected $fillable=['idAlmacen','idRecurso','cantidad'];
}
