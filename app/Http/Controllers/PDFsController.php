<?php

namespace App\Http\Controllers;

use App\Models\Recursobibliografico;
use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFsController extends Controller
{
    public function index($id){
        $venta=Venta::findOrFail($id);
        $cartCollection = \Cart::getContent();
        $data = [
            'cartCollection' => $cartCollection,
            'venta' => $venta
        ];
        $pdf = PDF::loadView('boleta.boleta_pdf',$data);
         return $pdf->download('boleta'.$venta->idVenta.'.pdf');
    }

    public function productos(){
        $lista = Recursobibliografico::where('estado','=','1')->join("tipos", "productos.tipo", "=", "tipos.idtipo")->select('productos.*','tipos.*')->get();
        $data = [
            'lista' => $lista,
        ];
        $pdf = PDF::loadView('reportes.productos_pdf',$data);
         return $pdf->download('reporteproductos.pdf');
    }

    public function compras(){
        $lista = Venta::where('estado','=','1')->join("users", "compras.idusuario", "=", "users.id")->select('compras.*','users.*')->get();
        $data = [
            'lista' => $lista,
        ];
        $pdf = PDF::loadView('reportes.compras_pdf',$data);
         return $pdf->download('reporte_compras.pdf');
    }

    
}
