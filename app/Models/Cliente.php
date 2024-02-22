<?php

namespace App\Models;

use app\Models\Segmento;
use app\Models\Segmentoo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'CLIENTE';
    protected $primaryKey = 'Id_cliente';
    public $timestamps = false;
    protected $fillable = [
        'Nombres', 'Apellidos', 'DNI', 'FechaNacimiento', 'Edad', 'Correo', 'Celular', 'Celular', 'Notas',
        'idsegmento', 'estado'
    ];

    public function Segmento()
    {
        return $this->hasOne(Segmento::class, 'idsegmento', 'idsegmento');
    }
    public function seg()
    {
        return $this->belongsTo(Segmento::class, 'idsegmento');
    }
}
