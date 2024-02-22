<?php

namespace App\Http\Controllers;
use App\Models\Planilla;
use App\Models\Trabajador;
use App\Models\Detalle_planilla;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PlanillaController extends Controller
{

    public function pdf($id)
    {
        $planilla =Planilla::findOrFail($id);
        $detalles = Detalle_planilla::join('planillas', 'planillas.idPlanilla', '=', 'detalle_planillas.idPlanilla')->join('trabajadores', 'trabajadores.idTrabajador', '=', 'detalle_planillas.idTrabajador')->where('detalle_planillas.idPlanilla','like','%'. $id.'%')->get();
        
        $pdf = PDF::loadView('planilla.pdf',['planilla'=>$planilla],['detalles'=>$detalles]);
        return $pdf->stream();
    }

    public function ano()
    {
        return view('planilla.ano');
    }

    public function pindex($a)
    {
        $planilla = Planilla::where('ano','like','%'.$a.'%')->where('estado','like','1')->get();
        return view("planilla.index",compact("planilla","a"));
    }

    public function createP($a)
    {
        return view('planilla.create',compact("a"));
    }

    public function store(Request $request)
    {
        $planilla=new Planilla();
        $planilla->mes=$request->mes;
        $planilla->ano=$request->ano;
        $planilla->estado="1";
        $planilla->save();

        $trabajadores = Trabajador::all();
        foreach($trabajadores as $tra){
            $dp =new Detalle_planilla();
            $dp->idPlanilla = $planilla->idPlanilla;
            $dp->idTrabajador = $tra->idTrabajador;

            $sueldos = Trabajador::join('tipos', 'tipos.idRol', '=', 'trabajadores.idRol')->where('trabajadores.idTrabajador','like','%'. $tra->idTrabajador.'%')->get();
            foreach($sueldos as $s){
            }
            $dp->sueldo = $s->sueldo;

            $faltas = Trabajador::join('asistencias', 'asistencias.idTrabajador', '=', 'trabajadores.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('fechas.mes','like','%'.$request->mes.'%')->where('fechas.ano','like','%'.$request->ano.'%')->where('trabajadores.idTrabajador','like','%'. $tra->idTrabajador.'%')->where('asistencias.estadoA','like','1')->get();
            $tardanzas = Trabajador::join('asistencias', 'asistencias.idTrabajador', '=', 'trabajadores.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('fechas.mes','like','%'.$request->mes.'%')->where('fechas.ano','like','%'.$request->ano.'%')->where('trabajadores.idTrabajador','like','%'. $tra->idTrabajador.'%')->where('asistencias.estadoA','like','2')->get();

            $f = count($faltas);
            $t = count($tardanzas);

            $dp->descuento = $s->sueldo*0.03*$f + $s->sueldo*0.01*$t;


            $hes = Trabajador::join('asistencias', 'asistencias.idTrabajador', '=', 'trabajadores.idTrabajador')->join('fechas', 'fechas.idFecha', '=', 'asistencias.idFecha')->where('fechas.mes','like','%'.$request->mes.'%')->where('fechas.ano','like','%'.$request->ano.'%')->where('trabajadores.idTrabajador','like','%'. $tra->idTrabajador.'%')->get();
            $dp->bonificacion = 0;
            foreach($hes as $he){
                $dp->bonificacion = $dp->bonificacion + $he->hora_extra;
            }
            $dp->bonificacion = $dp->sueldo*0.01*$dp->bonificacion;

            $dp->desembolso = $dp->sueldo - $dp->descuento + $dp->bonificacion;
            $dp->save();
        }


        $a = $request->ano;
        $planilla = Planilla::where('ano','like','%'.$a.'%')->where('estado','like','1')->get();

        return view("planilla.index",compact("planilla","a"));
    }



    public function edit($id)
    {
        $planilla =Planilla::findOrFail($id);
        return view('planilla.edit',compact('planilla'));
    }





    public function confirmar($id)
    {
        $planilla = Planilla::findOrFail($id);
        return view('planilla.confirmar', compact('planilla'));
    }
    


    function destroy($id)
    {
        $planilla = Planilla::findOrFail($id);
        $planilla->estado="0";
        $planilla->save();

        $a = $planilla->ano;
        $planilla = Planilla::where('ano','like','%'.$a.'%')->where('estado','like','1')->get();
        return view("planilla.index",compact("planilla","a"));
    }

}
