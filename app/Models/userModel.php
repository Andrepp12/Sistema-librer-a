<?php

namespace App\Models;
use App\Models\rolesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class userModel extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $primaryKey='id_usuario';
    public $timestamps=false;
    protected $fillable=['usuario','passsword','nombre','id_rol'];
   
    public function rolesModel(){
        return $this->hasOne(rolesModel::class,'id_rol','id_rol');
    }

    public function seg()
    {
        return $this->belongsTo(rolesModel::class, 'id_rol');
    }

}
