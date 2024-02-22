<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso_Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'recurso_mantenimiento';
    protected $primaryKey = 'idRecurso';
    public $timestamps = false;
    protected $fillable = [
        'IdMaterial',
        'fecha',
        'CantidadUso',
        'costo',
        'estado'
    ];

    public function recurso() {
        return $this->hasOne(Recurso::class,'idRecurso','idRecurso');
    }
}
