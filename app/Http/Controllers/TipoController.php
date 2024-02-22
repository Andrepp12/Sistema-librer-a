<?php

namespace App\Http\Controllers;
use App\Models\Tipo;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $rol=Tipo::all();
        return view("rol.index",compact("rol"));
    }

    public function create()
    {
        return view('rol.create');
    }

    public function store(Request $request)
    {
        $rol=new Tipo();
        $rol->nombreR = $request->nombreR;
        $rol->sueldo = $request->sueldo;

        $rol->save();
        return redirect()->route('rol.index')->with('datos','Registro Nuevo Guardado...!');
    }

    public function edit($id)
    {
        $rol =Tipo::findOrFail($id);
        return view('rol.edit',compact('rol'));
    }


    public function update(Request $request,$id)
    {
        $rol=Tipo::findOrFail($id);
        $rol->nombreR = $request->nombreR;
        $rol->sueldo = $request->sueldo;

        $rol->save();
        return redirect()->route('rol.index')->with('datos','Registro Nuevo Guardado...!');
    }


    public function confirmar($id)
    {
        $rol = Tipo::findOrFail($id);
        return view('rol.confirmar', compact('rol'));
    }


    function destroy($id)
    {
        $rol = Tipo::findOrFail($id);
        $rol->delete();
        return redirect()->route('rol.index')->with('datos', 'Registro Eliminado');
    }
}
