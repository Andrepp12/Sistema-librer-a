<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;
    protected $table = 'operacion';
    protected $primaryKey = 'idoperacion';
    public $timestamps = false;
    protected $fillable = ["fecha","subtotal","igv","total", "id_usuario","estado"];
}
