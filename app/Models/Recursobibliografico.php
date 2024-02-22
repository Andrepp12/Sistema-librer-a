<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursobibliografico extends Model
{
    use HasFactory;
    protected $table="recursobibliografico";
    protected $primaryKey="idRecurso";
    public $timestamps=false;
    protected $fillable=["titulo","autor","editorial","preciou","stock","estado"];
    
}
