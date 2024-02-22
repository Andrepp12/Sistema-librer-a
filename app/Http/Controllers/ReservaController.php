<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Recursobibliografico;
use App\Models\Reserva;
use App\Models\ReservaDetalle;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $reserva=Reserva::where('reserva.estado','like','1')->join("cliente", "reserva.idcliente", "=", "cliente.Id_cliente")->select('reserva.*','cliente.*')->where('idreserva','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("reserva.index",compact("reserva",'buscarpor',));
    }

    public function store(Request $request){
        $reserva=new Reserva();
        $reserva->idcliente=$request->idcliente;
        $reserva->fechares=date('Y-m-d');
        $fecha=Carbon::now();
        $nuevafecha= $fecha->addDays(5);
        $reserva->fechacad = $fecha;
        $reserva->estado='1';
        $reserva->save();
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $cart){
            $detalle_reserva=new ReservaDetalle();
            $detalle_reserva->idreserva=$reserva->idReserva;
            $detalle_reserva->idrecurso=$cart->id;
            $recurso=Recursobibliografico::findOrFail($cart->id);
            $recurso->stock -= $cart->quantity;
            $recurso->save();
            $detalle_reserva->cantidad=$cart->quantity;
            $detalle_reserva->save();
        }
        $reserva=Reserva::where('reserva.estado','like','1')->join("cliente", "reserva.idcliente", "=", "cliente.Id_cliente")->select('reserva.*','cliente.*')->paginate($this::PAGINATION);
        \Cart::clear();
        return view('reserva.index',compact('reserva','cartCollection'));
    }

    public function create(){
        $recursos=Recursobibliografico::get();
        $clientes=Cliente::get();
        $cartCollection = \Cart::getContent();
        return view('reserva.create',compact('recursos','clientes','cartCollection'));
    }


    public function destroy($id){
        $reserva=Reserva::findOrFail($id);
        $reserva->estado='0';
        $reserva->save();
        return redirect()->route('reserva.index')->with('datos','Registro Eliminado...!');
    }
}
