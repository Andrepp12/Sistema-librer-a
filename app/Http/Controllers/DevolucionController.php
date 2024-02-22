<?php

namespace App\Http\Controllers;

use App\Models\Devolucion;
use App\Models\DevolucionDetalle;
use App\Models\Recursobibliografico;
use App\Models\Venta;
use App\Models\VentaDetalle;
use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $devolucion=Devolucion::where('devolucion.estado','like','1')->join("cliente", "devolucion.idcliente", "=", "cliente.Id_cliente")->select('devolucion.*','cliente.*')->where('iddevolucion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("devolucion.index",compact("devolucion",'buscarpor',));
    }

    public function store(Request $request){
        $cliente = Venta::findOrFail($request->idventa);
        $devolucion=new Devolucion();
        $devolucion->idcliente=$cliente->idCliente;
        $devolucion->idventa=$request->idventa;
        $devolucion->razon=$request->razon;
        $devolucion->fechadev=date('Y-m-d');
        $devolucion->estado='1';
        $devolucion->save();
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $cart){
            $detalle_devolucion=new DevolucionDetalle();
            $detalle_devolucion->iddevolucion=$devolucion->idDevolucion;
            $detalle_devolucion->idrecurso=$cart->id;
            $recurso=Recursobibliografico::findOrFail($cart->id);
            $recurso->stock += $cart->quantity;
            $recurso->save();
            $detalle_devolucion->cantidad=$cart->quantity;
            $detalle_devolucion->save();
        }
        \Cart::clear();
        return view('dashboard.home');
    }

    public function create(Request $request){
        $idventa = $request->idventa;
        $recursos=VentaDetalle::where('idventa','like','%'.$idventa.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        return view('devolucion.create',compact('recursos','cartCollection','venta'));
    }

    public function created(){
        return view('devolucion.create0');
    }


    public function destroy($id){
        $devolucion=Devolucion::findOrFail($id);
        $devolucion->estado='0';
        $devolucion->save();
        return redirect()->route('devolucion.index')->with('datos','Registro Eliminado...!');
    }
}
