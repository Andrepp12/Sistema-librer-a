<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetalleOperacion;
use App\Models\Almacen;
use App\Models\Recursobibliografico;


class DetalleOperacionController extends Controller
{
  // Otros métodos...

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $idAlmacen
     * @return \Illuminate\Http\Response
     */
    public function create($idAlmacen)
    {
        $almacen = Almacen::findOrFail($idAlmacen);
        $recursos = Recursobibliografico::all();  // Obtener todos los recursos

        return view('detalla.create', compact('almacen', 'recursos'));

    }


    public function byProject($id){
        return   DetalleOperacion::where('idAlmacen',$id)->get();
      }


    public function store(Request $request)
    {
        $request->validate([
            'idAlmacen' => 'required',
            'idRecurso' => 'required',
            'cantidad' => 'required|numeric',
        ]);
    
        try {
            
            $almacen = Almacen::findOrFail($request->idAlmacen);
            $recursos = Recursobibliografico::findOrFail($request->idRecurso);
    
  
      if ($recursos->stock >= $request->cantidad) {

        $detalle = new DetalleOperacion([
            'idAlmacen' => $request->idAlmacen,
            'idRecurso' => $request->idRecurso,
            'cantidad' => $request->cantidad,
        ]);

        $detalle->idOperacion = 1; 
        $detalle->save();
        return redirect()->route('almacen.index')->with('datos', '¡Registro guardado!');
    }else{
        return redirect()->route('detalla.create')->with('error', 'La cantidad ingresada supera al stock disponible.');
    }

    
        } catch (\Exception $e) {
            // Manejar el error (puedes loggearlo o mostrar un mensaje de error)
            return redirect()->back()->with('error', 'La cantidad ingresada supera al stock disponible. ');
        }
    }
}
