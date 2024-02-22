<?php

namespace App\Models;
use app\Models\userModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolesModel extends Model
{ 
    use HasFactory;
    protected $table='roles';
    protected $primaryKey='id_rol';
    public $timestamps=false;
    protected $fillable=['nom_rol'];

    public function userModel(){
        return $this->hasMany(userModel::class,'id_usuario','id_usuario');
    }

    
}
