<?php

namespace App\Models;
use app\Models\Segmento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class dashboard extends Model
{
    
    protected $table='dashboard';
    protected $primaryKey='idDasbhboard';
    public $timestamps=false;
    protected $fillable=['pdf','estado'];

    public function Segmento(){
        return $this->hasMany(Segmento::class,'idsegmento','idsegmento');
    }
}
