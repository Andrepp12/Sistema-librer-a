<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Recursobibliografico;
use App\Models\Venta;
use App\Models\VentaDetalle;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $venta=Venta::where('venta.estado','like','1')->join("cliente", "venta.idcliente", "=", "cliente.Id_cliente")->select('venta.*','cliente.*')->where('idventa','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("venta.index",compact("venta",'buscarpor',));
    }

    public function store(Request $request){
        $venta=new Venta();
        $venta->idcliente=$request->idcliente;
        $venta->fecha=date('Y-m-d');
        $venta->total=\Cart::getTotal();
        $venta->estado='1';
        $venta->save();
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $cart){
            $detalle_venta=new VentaDetalle();
            $detalle_venta->idventa=$venta->idVenta;
            $detalle_venta->idrecurso=$cart->id;
            $recurso=Recursobibliografico::findOrFail($cart->id);
            $recurso->stock -= $cart->quantity;
            $recurso->save();
            $detalle_venta->cantidad=$cart->quantity;
            $detalle_venta->save();
        }
        return view('boleta.index',compact('venta','cartCollection'));
    }

    public function create(){
        $recursos=Recursobibliografico::get();
        $clientes=Cliente::get();
        $cartCollection = \Cart::getContent();
        return view('venta.create',compact('recursos','clientes','cartCollection'));
    }

    public function boleta(){
        return view('boleta.index');
    }

    public function salir_boleta(){
        \Cart::clear();
        return view('dashboard.home');
    }

    public function destroy($id){
        $venta=Venta::findOrFail($id);
        $venta->estado='0';
        $venta->save();
        return redirect()->route('venta.index')->with('datos','Registro Eliminado...!');
    }
}
