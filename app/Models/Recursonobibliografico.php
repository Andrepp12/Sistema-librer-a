<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursonobibliografico extends Model
{
    use HasFactory;
    protected $table="recursonobibliografico";
    protected $primaryKey="idRecurso";
    public $timestamps=false;
    protected $fillable=["nombreP","preciou","stock","estado"];
}


