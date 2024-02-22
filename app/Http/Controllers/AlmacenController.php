<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacen;
use App\Models\RecursoBibliografico;
use App\Models\DetalleOperacion;
class AlmacenController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $almacen=Almacen::where("estado","=","1")->where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        return view("almacen.index",compact("almacen",'buscarpor'));
    }

    public function create(){
       
        return view('almacen.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $almacen=new Almacen();
        $almacen->nombre=$request->nombre;
        $almacen->estado="1";
        $almacen->save();

   
        return redirect()->route('almacen.index')->with('datos','Registro Nuevo Guardado...!');
    } 



    
    public function edit($id)
    {
        $almacen = Almacen::findOrFail($id);
        return view('almacen.edit', compact('almacen'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
          
        ],[
 
        ]);
        $almacen = Almacen::findOrFail($id);
        $almacen->nombre=$request->nombre;
        $almacen->estado="1";
        $almacen->save();
        return redirect()->route('almacen.index')->with('datos','¡Registro actualizado!');
    }  


    public function destroy($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->estado='0';
        $almacen->save();
        return redirect()->route('almacen.index')->with('datos','¡Registro eliminado!');
    }

    public function confirmar($id) {
        $almacen = Almacen::findOrFail($id);
        return view('almacen.confirmar',compact('almacen'));
    }
      
    public function abrir($idAlmacen)
{
    $almacen = Almacen::findOrFail($idAlmacen);
    $libros = DetalleOperacion::where('idAlmacen', $idAlmacen)
        ->join('recursobibliografico', 'detalleoperacion.idRecurso', '=', 'recursobibliografico.idRecurso')
        ->select('recursobibliografico.idRecurso', 'recursobibliografico.titulo', 'recursobibliografico.stock', 'detalleoperacion.cantidad')
        ->paginate(10);

    return view('almacen.vista', compact('libros', 'almacen'));
}



}
