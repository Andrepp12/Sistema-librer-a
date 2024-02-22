<?php

namespace App\Http\Controllers;
use App\Models\Balance_general;
use App\Models\Balance_general2;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Balance_GeneralController extends Controller
{

    public function pdf($id)
    {
        $balance =Balance_general::findOrFail($id);
        
        $pdf = PDF::loadView('balance.pdf',['balance'=>$balance]);
        return $pdf->stream();
    }

    public function pdf2($a)
    {
        $balances = Balance_general::where('estado','like','1')->paginate($this::PAGINATION);
        
        foreach($balances as $item){
            $balanceU = $item;
        }

        $efectivo = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('efectivo');
        $otributaria = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('otributaria');
        $cuentasxcobrar = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('cuentasxcobrar');
        $olaboral = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('olaboral');

        $inventario = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('inventario');
        $inversion = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('inversion');
        $ocomercial = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('ocomercial');
        $olargoplazo = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('olargoplazo');

        $bono = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('bono');
        $accion = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('accion');
        $letrasxcobrar = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('letrasxcobrar');
        $enser = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('enser');

        $capital = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('capital');
        $reserva = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('reserva');

        $tpc = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tpc');
        $tac = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tac');
        $tpnc = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tpnc');
        $tpsvo = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tpsvo');
        $tanc = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tanc');
        $tptri = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tptri');
        $ta = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('ta');
        $tpp = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->sum('tpp');


        $balance2 = new Balance_general2();

        $balance2->efectivo=$efectivo;
        $balance2->cuentasxcobrar=$cuentasxcobrar;
        $balance2->inventario=$inventario;
        $balance2->inversion=$inversion;

        $balance2->bono=$bono;
        $balance2->accion=$accion;
        $balance2->letrasxcobrar=$letrasxcobrar;
        $balance2->enser=$enser;

        $balance2->otributaria=$otributaria;
        $balance2->olaboral=$olaboral;
        $balance2->ocomercial=$ocomercial;
        $balance2->olargoplazo=$olargoplazo;
        $balance2->capital=$capital;
        $balance2->reserva=$reserva;

        $balance2->tac=$tac;
        $balance2->tanc=$tanc;
        $balance2->ta=$ta;
        $balance2->tpc=$tpc;
        $balance2->tpnc=$tpnc;
        $balance2->tpsvo=$tpsvo;
        $balance2->tptri=$tptri;
        $balance2->tpp=$tpp;

        $balance2->save();


        $pdf = PDF::loadView('balance.pdf2',['balance'=>$balanceU],['balance2'=>$balance2]);

        // $pdf = PDF::loadView('balance.pdf2',['balance'=>$balanceU],['efectivo'=>$efectivo],['otributaria'=>$otributaria],['cuentasxcobrar'=>$cuentasxcobrar],['olaboral'=>$olaboral],['inventario'=>$inventario],['inversion'=>$inversion],['ocomercial'=>$ocomercial],['olargoplazo'=>$olargoplazo],['bono'=>$bono],['accion'=>$accion],['letrasxcobrar'=>$letrasxcobrar],['enser'=>$enser],['capital'=>$capital],['reserva'=>$reserva],['tpc'=>$tpc],['tac'=>$tac],['tpnc'=>$tpnc],['tpsvo'=>$tpsvo],['tanc'=>$tanc],['tptri'=>$tptri],['ta'=>$ta],['tpp'=>$tpp]);
        return $pdf->stream();
    }



    public function ano()
    {
        return view('balance.ano');
    }

    const PAGINATION=10;
    public function pindex($a)
    {
        $balance = Balance_general::where('ano','like','%'.$a.'%')->where('estado','like','1')->paginate($this::PAGINATION);
        return view("balance.index",compact("balance","a"));
    }

    public function index()
    {
        $balance=Balance_general::where('estado','like','1')->paginate($this::PAGINATION);
        return view("balance.index",compact("balance"));
    }

    public function create()
    {
        return view('balance.create');
    }


    public function store(Request $request)
    {
        $balance=new Balance_general();
        $balance->dia=$request->dia;
        $balance->mes=$request->mes;
        $balance->ano=$request->ano;

        $balance->efectivo=$request->efectivo;
        $balance->cuentasxcobrar=$request->cuentasxcobrar;
        $balance->inventario=$request->inventario;
        $balance->inversion=$request->inversion;

        $balance->bono=$request->bono;
        $balance->accion=$request->accion;
        $balance->letrasxcobrar=$request->letrasxcobrar;
        $balance->enser=$request->enser;

        $balance->otributaria=$request->otributaria;
        $balance->olaboral=$request->olaboral;
        $balance->ocomercial=$request->ocomercial;
        $balance->olargoplazo=$request->olargoplazo;
        $balance->capital=$request->capital;
        $balance->reserva=$request->reserva;

        $balance->tac=$request->TAC2;
        $balance->tanc=$request->TANC2;
        $balance->ta=$request->TA2;
        $balance->tpc=$request->TPC2;
        $balance->tpnc=$request->TPNC2;
        $balance->tpsvo=$request->TP2;
        $balance->tptri=$request->TPTR2;
        $balance->tpp=$request->TPYP2;

        $balance->estado="1";
        $balance->save();
        return redirect()->route('balance.ano')->with('datos','Registro Nuevo Guardado...!');
    }

    public function ver($id)
    {
        $balance =Balance_general::findOrFail($id);
        return view('balance.ver',compact('balance'));
    }

    public function edit($id)
    {
        $balance =Balance_general::findOrFail($id);
        return view('balance.edit',compact('balance'));
    }


    public function update(Request $request,$id)
    {
        $balance=Balance_general::findOrFail($id);
        $balance->dia=$request->dia;
        $balance->mes=$request->mes;
        $balance->ano=$request->ano;

        $balance->efectivo=$request->efectivo;
        $balance->cuentasxcobrar=$request->cuentasxcobrar;
        $balance->inventario=$request->inventario;
        $balance->inversion=$request->inversion;

        $balance->bono=$request->bono;
        $balance->accion=$request->accion;
        $balance->letrasxcobrar=$request->letrasxcobrar;
        $balance->enser=$request->enser;

        $balance->otributaria=$request->otributaria;
        $balance->olaboral=$request->olaboral;
        $balance->ocomercial=$request->ocomercial;
        $balance->olargoplazo=$request->olargoplazo;
        $balance->capital=$request->capital;
        $balance->reserva=$request->reserva;

        $balance->tac=$request->TAC2;
        $balance->tanc=$request->TANC2;
        $balance->ta=$request->TA2;
        $balance->tpc=$request->TPC2;
        $balance->tpnc=$request->TPNC2;
        $balance->tpsvo=$request->TP2;
        $balance->tptri=$request->TPTR2;
        $balance->tpp=$request->TPYP2;

        $balance->estado="1";
        $balance->save();
        return redirect()->route('balance.ano')->with('datos','Registro Nuevo Guardado...!');
    }

    public function confirmar($id)
    {
        $balance = Balance_general::findOrFail($id);
        return view('balance.confirmar', compact('balance'));
    }
    
    function destroy($id)
    {
        $balance = Balance_general::findOrFail($id);
        $balance->estado="0";
        $balance->save();
        return redirect()->route('balance.ano')->with('datos', 'Registro Eliminado');
    }
}
