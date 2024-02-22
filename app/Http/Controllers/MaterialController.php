<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    const PAG = 5;
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $material =  Material::where('estado','=','1')->where('Nombre','like','%'.$buscarpor.'%')->paginate($this::PAG);
        return view('material.index',compact('material','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'Nombre'=>'required|max:50|unique:material'
        ],[
            'Nombre.required'=>'Ingrese el nombre de la categoría!!!',
            'Nombre.max'=>'El nombre debe tener máximo 30 caracteres!!!',
            'Nombre.unique'=>'Ya existe está descripción!!!'
        ]);
        $material = new Material();
        $material->Nombre = $request->Nombre;
        $material->Cantidad = $request->Cantidad;
        $material->estado = '1';
        $material->save();
        return redirect()->route('material.index')->with('datos','¡Registro guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'Nombre'=>'required|max:50'
        ],[
            'Nombre.required'=>'Ingrese el nombre del material!!!',
            'Nombre.max'=>'El nombre debe tener máximo 50 caracteres!!!'
        ]);
        $material = Material::findOrFail($id);
        $material->Nombre = $request->Nombre;
        $material->Cantidad = $request->Cantidad;
        $material->estado = '1';
        $material->save();
        return redirect()->route('material.index')->with('datos','¡Registro actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        $material->estado='0';
        $material->save();
        return redirect()->route('material.index')->with('datos','¡Registro eliminado!');
    }

    public function confirmar($id) {
        $material = Material::findOrFail($id);
        return view('material.confirmar',compact('material'));
    }
}
