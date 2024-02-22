<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reciclador;

class RecicladorController extends Controller
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
        $reciclador =  Reciclador::where('estado','=','1')->where('NombreInstitucion','like','%'.$buscarpor.'%')->paginate($this::PAG);
        return view('reciclador.index',compact('reciclador','buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reciclador.create');
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
            'NombreInstitucion'=>'required|max:100|unique:reciclador',
            'Representante'=>'required|max:100|unique:reciclador',
            'Contacto'=>'required|min:5|max:15|unique:reciclador',
        ],[
            'NombreInstitucion.required'=>'Ingrese el nombre de la institucion!!!',
            'NombreInstitucion.max'=>'El nombre debe tener máximo 100 caracteres!!!',
            'NombreInstitucion.unique'=>'Ya existe este nombre !!!'
        ]);
        $reciclador = new Reciclador();
        $reciclador->NombreInstitucion = $request->NombreInstitucion ;
        $reciclador->Representante = $request->Representante;
        $reciclador->Contacto = $request->Contacto;
        $reciclador->estado = '1';
        $reciclador->save();
        return redirect()->route('reciclador.index')->with('datos','¡Registro guardado!');
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
        $reciclador = Reciclador::findOrFail($id);
        return view('reciclador.edit', compact('reciclador'));
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
            'NombreInstitucion'=>'required|max:50'
        ],[
            'NombreInstitucion.required'=>'Ingrese el nombre del material!!!',
            'NombreInstitucion.max'=>'El nombre debe tener máximo 50 caracteres!!!'
        ]);
        $reciclador = Reciclador::findOrFail($id);
        $reciclador->NombreInstitucion = $request->NombreInstitucion;
        $reciclador->Representante = $request->Representante;
        $reciclador->Contacto = $request->Contacto;  
        $reciclador->estado = '1';
        $reciclador->save();
        return redirect()->route('reciclador.index')->with('datos','¡Registro actualizado!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reciclador = Reciclador::findOrFail($id);
        $reciclador->estado='0';
        $reciclador->save();
        return redirect()->route('reciclador.index')->with('datos','¡Registro eliminado!');
    }

    public function confirmar($id) {
        $reciclador = Reciclador::findOrFail($id);
        return view('reciclador.confirmar',compact('reciclador'));
    }
}
