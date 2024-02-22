<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOperacion extends Model
{
    use HasFactory;

    protected $table = 'detalleoperacion';
    protected $primaryKey = 'idOperacion';
    public $timestamps = false;
    protected $fillable = [
        'idAlmacen',
        'idRecurso',
        'cantidad'
    ];

    public function detalleOperacion()
    {
        return $this->hasMany(DetalleOperacion::class, 'idRecurso', 'idRecurso');
    }
}
