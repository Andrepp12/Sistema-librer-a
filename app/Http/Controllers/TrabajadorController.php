<?php

namespace App\Http\Controllers;
use App\Models\Trabajador;
use App\Models\Tipo;
use App\Models\Asistencia;

use Illuminate\Http\Request;

class TrabajadorController extends Controller
{

    public function ano($id)
    {
        $item = Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->where('idTrabajador','like','%'.$id.'%')->get();
        foreach ($item as $trabajador){
        }
        return view('trabajador.ano',compact("trabajador"));
    }

    public function mes($a,$id)
    {
        $item = Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->where('idTrabajador','like','%'.$id.'%')->get();
        foreach ($item as $trabajador){
        }

        return view("trabajador.mes",compact("a","trabajador"));
    }


    public function asistencia($a,$m,$id)
    {
        $item = Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->where('idTrabajador','like','%'.$id.'%')->get();
        foreach ($item as $trabajador){
        }

        $asistencias=Asistencia::join('trabajadores', 'trabajadores.idTrabajador', '=', 'asistencias.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('asistencias.idTrabajador','like','%'.$id.'%')->where('fechas.ano','like','%'.$a.'%')->where('fechas.mes','like','%'.$m.'%')->get();


        return view("trabajador.asistencia",compact("a","m","trabajador","asistencias"));
    }







    public function index()
    {
        $trabajador=Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->get();
        return view("trabajador.index",compact("trabajador"));
    }

    public function create()
    {
        $roles = Tipo::all();

        return view('trabajador.create',compact("roles"));
    }

    public function store(Request $request)
    {
        $trabajador=new Trabajador();
        $trabajador->idRol = $request->idRol;
        $trabajador->nombreT = $request->nombreT;
        $trabajador->cv_dia = $request->cv_dia;
        $trabajador->cv_mes = $request->cv_mes;
        $trabajador->cv_ano = $request->cv_ano;
        $trabajador->estado = "1";

        $trabajador->save();
        return redirect()->route('trabajador.index')->with('datos','Registro Nuevo Guardado...!');
    }

    public function edit($id)
    {
        $trabajador =Trabajador::findOrFail($id);
        $roles = Tipo::all();
        return view('trabajador.edit',compact('trabajador','roles'));
    }


    public function update(Request $request,$id)
    {
        $trabajador=Trabajador::findOrFail($id);
        $trabajador->idRol = $request->idRol;
        $trabajador->nombreT = $request->nombreT;
        $trabajador->cv_dia = $request->cv_dia;
        $trabajador->cv_mes = $request->cv_mes;
        $trabajador->cv_ano = $request->cv_ano;
        $trabajador->estado = "1";

        $trabajador->save();
        return redirect()->route('trabajador.index')->with('datos','Registro Nuevo Guardado...!');
    }


    public function confirmar($id)
    {
        $item = Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->where('idTrabajador','like','%'.$id.'%')->get();

        foreach ($item as $trabajador){
        }

        return view('trabajador.confirmar', compact('trabajador'));
    }


    function destroy($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        $trabajador->estado = "0";
        $trabajador->save();
        return redirect()->route('trabajador.index')->with('datos', 'Registro Eliminado');
    }

}

