<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recurso;
use App\Models\Recursonobibliografico;
use App\Models\Recursobibliografico;
class RecursosBibliograficosController extends Controller
{
    public function store(Request $request){
        $data=$request->validate([
            
        ],
        [
            
        ]);

        $recurso=new Recurso();
        $recurso->tipo=$request->tipo;
        $recurso->estado="1";
        $recurso->save();

        $ultimoId = $recurso->idRecurso;


        $recursobibliografico = new Recursobibliografico();
        $recursobibliografico->idRecurso = $ultimoId;
        $recursobibliografico->titulo = $request->titulo;
        $recursobibliografico->autor = $request->autor;
        $recursobibliografico->stock = $request->stock;
        $recursobibliografico->editorial = $request->editorial;
        $recursobibliografico->preciou = $request->preciou;
        $recursobibliografico->estado = "1";
        $recursobibliografico->save();
        return redirect()->route('recurso.index')->with('datos','Registro Nuevo Guardado...!');
    }



    
  
}
