<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;
    protected $table="recurso";
    protected $primaryKey="idRecurso";
    public $timestamps=false;
    protected $fillable=["tipo","estado"];

    public function recurso_mantenimiento() {
        return $this->hasMany(Recurso_Mantenimiento::class,'idRecurso','idRecurso');
    }

}
