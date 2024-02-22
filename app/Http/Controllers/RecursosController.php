<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recurso;
use App\Models\Recursonobibliografico;
use App\Models\Recursobibliografico;
class RecursosController extends Controller
{
    const PAGINATION=10;
    public function index(Request $request){
        $buscarpor = $request->get('buscarpor');
        $buscarpor2 = $request->get('buscarpor2');
        $recurso=Recursobibliografico::where("estado","=","1")->where('autor','like','%'.$buscarpor.'%')->paginate($this::PAGINATION);
        $recurson=Recursonobibliografico::where("estado","=","1")->where('nombreP','like','%'.$buscarpor2.'%')->paginate($this::PAGINATION);
        return view("recurso.index",compact("recurson","recurso",'buscarpor','buscarpor2'));
    }

    public function create(){
       
        return view('recurso.create');
    }



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


        $recursonobibliografico = new Recursonobibliografico();
        $recursonobibliografico->idRecurso = $ultimoId;
        $recursonobibliografico->stock = $request->stock;
        $recursonobibliografico->nombreP = $request->nombreP;
        $recursonobibliografico->preciou = $request->preciou;
        $recursonobibliografico->estado = "1";
        $recursonobibliografico->save();
        return redirect()->route('recurso.index')->with('datos','Registro Nuevo Guardado...!');
    }
}
