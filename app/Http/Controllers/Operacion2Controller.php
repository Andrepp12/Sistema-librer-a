<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;
use App\Models\Almacen;
use App\Models\Recursonobibliografico;
use App\Models\Recursobibliografico;
use App\Models\OperacionDetalle;
use App\Models\userModel;
use App\Models\Operacion;
use Barryvdh\DomPDF\Facade\Pdf;

class Operacion2Controller extends Controller
{
    public function create(){
        $almacen = Almacen::get();
        $recursos=Recursonobibliografico::get();
        $proveedor=userModel::get();
        $cartCollection = \Cart::getContent();
        return view('operacion2.create',compact('recursos','almacen','proveedor','cartCollection'));
    }

    public function store(Request $request){
      

        $operacion=new Operacion();
        $operacion->fecha=date('Y-m-d');
        $operacion->subtotal=\Cart::getTotal();
        $operacion->igv=\Cart::getTotal()*0.18;
        $operacion->total=\Cart::getTotal()+\Cart::getTotal()*0.18;
        $operacion->id_usuario=$request->id_usuario;
        $operacion->estado='1';
        $operacion->save();
        $cartCollection = \Cart::getContent();
        foreach($cartCollection as $cart){
            $detalle_operacion=new OperacionDetalle();
            $detalle_operacion->idoperacion=$operacion->idoperacion;
            $detalle_operacion->idAlmacen=$request->idAlmacen;
            $detalle_operacion->idrecurso=$cart->id;
            $recurso=Recursonobibliografico::findOrFail($cart->id);
            $recurso->stock += $cart->quantity;
            $recurso->save();
            $detalle_operacion->cantidad=$cart->quantity;
            $detalle_operacion->save();
        }
        return view('dashboard.home',compact('operacion','cartCollection'));
    }
}
