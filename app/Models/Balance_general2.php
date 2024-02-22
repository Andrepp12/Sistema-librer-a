<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_general2 extends Model
{
    use HasFactory;
    protected $table="balance_general2s";
    protected $primaryKey="idBalance";
    public $timestamps=false;
    protected $fillable=["efectivo","cuentasxcobrar","inventario","inversion","bono","accion","letrasxcobrar","enser","otributaria","olaboral","ocomercial","olargoplazo","capital","reserva","tac","tanc","ta","tpc","tpnc","tpsvo","tptri","tpp"];
}
