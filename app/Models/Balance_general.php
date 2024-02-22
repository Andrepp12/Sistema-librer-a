<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_general extends Model
{
    use HasFactory;
    protected $table="balance_generals";
    protected $primaryKey="idBalance";
    public $timestamps=false;
    protected $fillable=["efectivo","cuentasxcobrar","inventario","inversion","bono","accion","letrasxcobrar","enser","otributaria","olaboral","ocomercial","olargoplazo","estado","dia","mes","ano","capital","reserva","tac","tanc","ta","tpc","tpnc","tpsvo","tptri","tpp"];
}
