<?php

namespace App\Http\Controllers;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\userModel;

class SolicitudController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $usuario = userModel::all();
        $buscarpor = $request->get('buscarpor');
        $solicitud=Solicitud::where("visibilidad","=","1")->where('estado','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("solicitud.index",compact("solicitud","usuario",'buscarpor'));
    }

    public function create(){
        $usuario = userModel::all();

        return view('solicitud.create', compact('usuario'));
    }

    public function store(Request $request){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $solicitud=new Solicitud();
        $solicitud->razon=$request->razon;
        $solicitud->id_usuario=$request->id_usuario;
        $solicitud->estado="SIN APROBAR";
        $solicitud->visibilidad="1";
        $solicitud->save();

       
        return redirect()->route('solicitud.index')->with('datos','Registro Nuevo Guardado...!');
    }
}
