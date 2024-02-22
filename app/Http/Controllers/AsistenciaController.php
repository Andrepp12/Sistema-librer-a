<?php

namespace App\Http\Controllers;
use App\Models\Asistencia;
use App\Models\Fecha;
use App\Models\Trabajador;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function ano()
    {
        return view('asistencia.ano');
    }

    public function mes($a)
    {
        return view("asistencia.mes",compact("a"));
    }

    public function asistencia($a,$m)
    {

        $fechas=Fecha::where('fechas.ano','like','%'.$a.'%')->where('fechas.mes','like','%'.$m.'%')->get();

        if( count($fechas)==0 ){
            $n_days = cal_days_in_month(CAL_GREGORIAN, $m, $a);
                for ($x=1; $x <= $n_days ; $x++){
                    $fecha=new Fecha();
                    $fecha->dia = $x;
                    $fecha->mes = $m;
                    $fecha->ano = $a;
                    $fecha->save();
                }
        }

        $fechas=Fecha::where('fechas.ano','like','%'.$a.'%')->where('fechas.mes','like','%'.$m.'%')->get();

        return view("asistencia.asistencia",compact("fechas","a","m"));
    }


    public function registrar($a,$m,$id)
    {
        $fecha = Fecha::findOrFail($id);

        $trabajadores = Trabajador::all();
        
        $asistencias = Asistencia::join('trabajadores', 'trabajadores.idTrabajador', '=', 'asistencias.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('fechas.idFecha','like','%'.$id.'%')->get();


        return view('asistencia.create',compact("asistencias","trabajadores","fecha","a","m"));
    }


    public function store(Request $request)
    {
        $tra=Trabajador::join('asistencias', 'asistencias.idTrabajador', '=', 'trabajadores.idTrabajador')->where('asistencias.idTrabajador','like','%'.$request->idTrabajador.'%')->where('asistencias.idFecha','like','%'.$request->idFecha.'%')->get();

        if( count($tra)==0 ){
            $asistencia=new Asistencia();
            $asistencia->idTrabajador = $request->idTrabajador;
            $asistencia->idFecha = $request->idFecha;
            $asistencia->hora_extra = $request->hora_extra;
            $asistencia->estadoA = $request->estadoA;

            $asistencia->save();
        }else{
            foreach($tra as $xd){
            }
            $asistencia = Asistencia::findOrFail($xd->idAsistencia);
            $asistencia->hora_extra = $request->hora_extra;
            $asistencia->estadoA = $request->estadoA;
            $asistencia->save();
        }

        $fecha = Fecha::findOrFail($request->idFecha);
        $trabajadores = Trabajador::all();
        $asistencias = Asistencia::join('trabajadores', 'trabajadores.idTrabajador', '=', 'asistencias.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('fechas.idFecha','like','%'.$request->idFecha.'%')->get();
        
        $a = $request->a;
        $m = $request->m;
        return view('asistencia.create',compact("asistencias","trabajadores","fecha","a","m"));
    }
}
