<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\Solicitud;
class SolicitudaController extends Controller
{
    //
    const PAGINATION=10;
    public function index(Request $request){
        $usuario = userModel::all();
        $buscarpor = $request->get('buscarpor');
        $solicitud=Solicitud::where("visibilidad","=","1")->where('estado','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("solicituda.index",compact("solicitud","usuario",'buscarpor'));
    }

    public function edit($id){
        $solicituda=Solicitud::findOrFail($id);
        $usuario = userModel::all();

        return view('solicituda.edit',compact('solicituda','usuario'));
    }

    public function update(Request $request,$id){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $solicitud=Solicitud::findOrFail($id);
        $solicitud->razon=$request->razon;
        $solicitud->id_usuario=$request->id_usuario;
        $solicitud->estado="APROBADO";
        $solicitud->visibilidad="1";
        $solicitud->save();
        return redirect()->route('solicituda.index')->with('datos','Registro Actualizado...!');
    }
}
