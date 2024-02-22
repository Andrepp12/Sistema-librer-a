<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DevolucionGeneral;
use App\Models\Devolucion;
use App\Models\Venta;
use App\Models\VentaDetalle;
use App\Models\userModel;
use Barryvdh\DomPDF\Facade\Pdf;
class DevolucionGeneralController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $proveedor = userModel::all();
        $buscarpor = $request->get('buscarpor');
        $devoluciong=DevolucionGeneral::where('estado','=','1')->where('motivo','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("devoluciongeneral.index",compact("devoluciong",'buscarpor','proveedor'));
    }

    public function create(Request $request){
        $idDevolucion = $request->idDevolucion;
        $proveedor = userModel::all();
        $recursos=VentaDetalle::where('idDevolucion','like','%'.$idDevolucion.'%')->join("recursobibliografico", "detalleventa.idrecurso", "=", "recursobibliografico.idrecurso")->select('detalleventa.*','recursobibliografico.*')->paginate($this::PAGINATION);
        $venta=Venta::findOrFail($request->idventa);
        $cartCollection = \Cart::getContent();
        return view('devoluciongeneral.create',compact('recursos','cartCollection','venta','proveedor'));
    }

    public function created(){
        $proveedor = userModel::all();
        $devolucion = Devolucion::all();
        return view('devoluciongeneral.create0',compact('proveedor','devolucion'));

    }

    public function store(Request $request){
        $devolucion=new DevolucionGeneral();
        $devolucion->id_usuario=$request->id_usuario;
        $devolucion->idDevolucion=$request->idDevolucion;
        $devolucion->motivo=$request->motivo;
        $devolucion->fechag=date('Y-m-d');
        $devolucion->estado='1';
        $devolucion->save();

        return view('dashboard.home');
    }

    public function destroy($id){
        $devolucion=DevolucionGeneral::findOrFail($id);
        $devolucion->estado='0';
        $devolucion->save();
        return redirect()->route('devoluciongeneral.index')->with('datos','Registro Eliminado...!');
    }
    public function pdf(Request $request){
        $buscarpor = $request->get('buscarpor');
        $devoluciong=DevolucionGeneral::where('estado','=','1')->where('motivo','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);

      
        $proveedor= userModel::all();
        $pdf = PDF::loadView('devoluciongeneral.pdf', compact('devoluciong','proveedor'));
        
         return $pdf->download('devoluciongeneral.pdf');
         return view('devoluciongeneral.index');
    }
}
