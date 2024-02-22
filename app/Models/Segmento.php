<?php

namespace App\Models;
use app\Models\Cliente;
use app\Models\dashboard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segmento extends Model
{
    use HasFactory;
    protected $table='SEGMENTO';
    protected $primaryKey='idsegmento';
    public $timestamps=false;
    protected $fillable=['segmento_name','segmento_descripcion','estado','idDasbhboard'];

    public function Cliente(){
        return $this->hasMany(Cliente::class,'Id_cliente','Id_cliente');
    }
 
    public function dashboard(){
         return $this->hasOne(dashboard::class,'idDasbhboard','idDasbhboard');
     }

     public function dash(){
        return $this->belongsTo(dashboard::class,'idDasbhboard');
     }


     
     
}
