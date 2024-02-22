<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;
use App\Models\Recursonobibliografico;
use App\Models\Recursobibliografico;
use App\Models\OperacionDetalle;
use App\Models\userModel;
use App\Models\Almacen;
use App\Models\Operacion;
use Barryvdh\DomPDF\Facade\Pdf;
class OperacionController extends Controller
{
    
   /* public function index(Request $request)
    {
        $usuario = userModel::all();
        $buscarpor = $request->get('buscarpor');
        $buscarpor2 = $request->get('buscarpor2');
        $recurso=Recursobibliografico::where("estado","=","1")->where('autor','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        $recurson=Recursonobibliografico::where("estado","=","1")->where('nombreP','like','%'.$buscarpor2.'%')->paginate($this::PAGINATION);
        return view("operacion.index",compact("recurson","recurso",'buscarpor','buscarpor2','usuario'));
       
    }*/

    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $operacion=Operacion::where('operacion.estado','like','1')->join("usuarios", "operacion.id_usuario", "=", "usuarios.id_usuario")->select('operacion.*','usuarios.*')->where('idoperacion','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("operacion.index",compact("operacion",'buscarpor',));
    }


    /*public function store(Request $request){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $operacion=new Operacion();
        $operacion->descripcion=$request->descripcion;
        $operacion->subtotal=$request->subtotal;
        $operacion->total = $request->total;
        $operacion->igv = $request->igv;
        $operacion->id_usuario=$request->id_usuario;
       
        $operacion->estado="1";
        $operacion->save();

       
        return redirect()->route('operacion.index')->with('datos','Registro Nuevo Guardado...!');
    }*/

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
            $recurso=Recursobibliografico::findOrFail($cart->id);
            $recurso->stock += $cart->quantity;
            $recurso->save();
            $detalle_operacion->cantidad=$cart->quantity;
            $detalle_operacion->save();
        }
        return view('boleta2.index',compact('operacion','cartCollection'));
    }
    public function create(){
        $almacen = Almacen::get();
        $recursos=Recursobibliografico::get();
        $proveedor=userModel::get();
        $cartCollection = \Cart::getContent();
        return view('operacion.create',compact('recursos','almacen','proveedor','cartCollection'));
    }

    public function boleta2(){

        return view('boleta2.index');
    }

    public function salir_boleta2(){
        \Cart::clear();
        return view('dashboard.home');
    }

    public function pdf(){
        $operacion = Operacion::all();
        $usuario = userModel::all();
        $pdf = PDF::loadView('operacion.pdf', compact('operacion','usuario'));
        
         return $pdf->download('operacion.pdf');
         return view('operacion.index');
    }
}
