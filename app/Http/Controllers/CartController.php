<?php

namespace App\Http\Controllers;

use App\Models\Recursobibliografico;
use App\Models\Venta;
use App\Models\VentaDetalle;
use Illuminate\Http\Request;
use App\Models\userModel;
class CartController extends Controller
{
    public function shop()
    {
        $products = Recursobibliografico::all();
        return view('shop')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart.index')->with(['cartCollection' => $cartCollection]);
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('ventas.create')->with('success_msg', 'Item is removed!');
    }
    public function remove1(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('operacion.create')->with('success_msg', 'Item is removed!');
    }
    public function remove2(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('operacion2.create')->with('success_msg', 'Item is removed!');
    }
    public function remover(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('reserva.create')->with('success_msg', 'Item is removed!');
    }

    public function removed(Request $request){
        \Cart::remove($request->id);
        $idventa = $request->idventa;
        $recursos=VentaDetalle::where('idventa','like','%'.$idventa.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        return view('devolucion.create',compact('recursos','cartCollection','venta'))->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function removedd(Request $request){
        \Cart::remove($request->id);
        $idventa = $request->idventa;
        $recursos=VentaDetalle::where('idventa','like','%'.$idventa.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        $proveedor = userModel::all();
        return view('devoluciongeneral.create',compact('recursos','proveedor','cartCollection','venta'))->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->titulo,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->autor,
                'editorial' => $request->editorial,
            )
        ));
        return redirect()->route('ventas.create')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function add1(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->titulo,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->autor,
                'editorial' => $request->editorial,
            )
        ));
        return redirect()->route('operacion.create')->with('success_msg', 'Item Agregado a sú Carrito!');
    } 

    public function add2(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->nombreP,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->nombreP,
            )
        ));
        return redirect()->route('operacion2.create')->with('success_msg', 'Item Agregado a sú Carrito!');
    } 

    const PAGINATION=10;
    public function addd(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->titulo,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->autor,
                'editorial' => $request->editorial,
            )
        ));
        $idventa = $request->idventa;
        $recursos=VentaDetalle::where('idventa','like','%'.$idventa.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        return view('devolucion.create',compact('recursos','cartCollection','venta'))->with('success_msg', 'Item Agregado a sú Carrito!');
    }


    public function adddd(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->titulo,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->autor,
                'editorial' => $request->editorial,
            )
        ));
        $idventa = $request->idventa;
        $recursos=VentaDetalle::where('idventa','like','%'.$idventa.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        $proveedor = userModel::all();
        return view('devoluciongeneral.create',compact('recursos','proveedor','cartCollection','venta'))->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function addr(Request $request){
        \Cart::add(array(
            'id' => $request->idrecurso,
            'name' => $request->titulo,
            'price' => $request->preciou,
            'quantity' => $request->quantity,
            'attributes' => array(
                'autor' => $request->autor,
                'editorial' => $request->editorial,
            )
        ));
        return redirect()->route('reserva.create')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('venta.index')->with('success_msg', 'Car is cleared!');
    }

    public function clear1(){
        \Cart::clear();
        return redirect()->route('operacion.index')->with('success_msg', 'Car is cleared!');
    }
    public function clear2(){
        \Cart::clear();
        return redirect()->route('operacion2.index')->with('success_msg', 'Car is cleared!');
    }
    public function cleard(){
        \Cart::clear();
        return redirect()->route('devolucion.index')->with('success_msg', 'Car is cleared!');
    }
    public function cleardd(){
        \Cart::clear();
        return redirect()->route('devoluciongeneral.index')->with('success_msg', 'Car is cleared!');
    }

    public function clearr(){
        \Cart::clear();
        return redirect()->route('reserva.index')->with('success_msg', 'Car is cleared!');
    }
}
