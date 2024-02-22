<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table="solicituds";
    protected $primaryKey="idSolicitud";
    public $timestamps=false;
    protected $fillable=["razon","id_usuario","estado","visibilidad"];
}
