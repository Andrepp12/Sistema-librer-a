<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
class ProveedoresController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request)
    {
        $buscarpor =$request->get('buscarpor');   
        $usuario=userModel::where('id_rol','=','5')->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
  
        return view('proveedores.index',compact('usuario','buscarpor'));
    }

    public function create(){
       
        return view('proveedores.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $usuario = new userModel();
        $usuario->usuario=$request->usuario;
        $usuario->passsword=$request->passsword;
        $usuario->nombre=$request->nombre;
        $usuario->id_rol=5;
        $usuario->save();
        return redirect()->route('proveedores.index')->with('datos','registro');
    }
}
