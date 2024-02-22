<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recurso_Mantenimiento;
use App\Models\Recursobibliografico;

use App\Models\Recurso;
use App\Models\Material;

class Recurso_MantenimientoController extends Controller
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
        $recurso_mantenimiento = Recurso_Mantenimiento::where('estado','=','1')->where('Fecha','like','%'.$buscarpor.'%')->paginate($this::PAG);
        return view('recurso_mantenimiento.index',compact('recurso_mantenimiento','buscarpor'));
    }

    public function byProject($id){
      return   Recurso_Mantenimiento::where('idRecurso',$id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recurso_mantenimiento =  Recurso_Mantenimiento::where('estado','=','1')->get();
        $recursobibliografico = Recursobibliografico::where('estado','=','1')->get();
        $material = Material::where('estado','=','1')->get();
        return view('recurso_mantenimiento.create',compact('recurso_mantenimiento','recursobibliografico','material'));
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
            'Fecha'=>'required|max:30|unique:recurso_mantenimiento',
            'CantidadUso'=>'required|min:1',
            'Costo'=>'required|min:0.01',
        ],[
            'Fecha.required'=>'Ingrese nombre de la fecha!!!',
            'CantidadUso.required'=>'Ingrese la cantidad!!!',
            'CantidadUso.min'=>'Debe ser mayor a 0!!!',
            'Costo.required'=>'Ingrese el costo!!!',
            'Costo.min'=>'Debe ser mayor a 0!!!'

        ]);
        $recurso_mantenimiento = new Recurso_Mantenimiento();
        $recurso_mantenimiento->idRecurso = $request->idRecurso;
        $recurso_mantenimiento->idMaterial = $request->idMaterial;
        $recurso_mantenimiento->Fecha = $request->Fecha;
        $recurso_mantenimiento->CantidadUso = $request->CantidadUso;
        $recurso_mantenimiento->Costo = $request->Costo;
        $recurso_mantenimiento->estado = '1';
        $recurso_mantenimiento->save();

        // Cambiar el estado del recurso bibliográfico asociado a 0
        $recursobibliografico = Recursobibliografico::findOrFail($request->idRecurso);
        $recursobibliografico->save();
        
        return redirect()->route('recurso_mantenimiento.index')->with('datos','¡Registro guardado!');
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
        $recurso_mantenimiento = Recurso_Mantenimiento::findOrFail($id);
        $material = Material::where('estado','=','1')->get();
        return view('recurso_mantenimiento.edit', compact('recurso_mantenimiento','material'));
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
            'Fecha'=>'required|max:30',
            'CantidadUso'=>'required|min:1',
            'Costo'=>'required|min:0.01',
        ],[
            'Fecha.required'=>'Ingrese nombre de la fecha!!!',
            'CantidadUso.required'=>'Ingrese la cantidad!!!',
            'CantidadUso.min'=>'Debe ser mayor a 0!!!',
            'Costo.required'=>'Ingrese el costo!!!',
            'Costo.min'=>'Debe ser mayor a 0!!!'

        ]);
        $recurso_mantenimiento = Recurso_Mantenimiento::findOrFail($id);
        $recurso_mantenimiento->idMaterial = $request->idMaterial;
        $recurso_mantenimiento->Fecha = $request->Fecha;
        $recurso_mantenimiento->CantidadUso = $request->CantidadUso;
        $recurso_mantenimiento->Costo = $request->Costo;
        $recurso_mantenimiento->estado = '1';
        $recurso_mantenimiento->save();
        return redirect()->route('recurso_mantenimiento.index')->with('datos','¡Registro actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recurso_mantenimiento = Recurso_Mantenimiento::findOrFail($id);
        $recurso_mantenimiento->delete();

        $recursobibliografico = Recursobibliografico::findOrFail($id);
        $recursobibliografico->estado = '1';
        $recursobibliografico->save();
        
        return redirect()->route('recurso_mantenimiento.index')->with('datos','¡Registro eliminado!');
    }

    

    public function confirmar($id) {
        $recurso_mantenimiento = Recurso_Mantenimiento::findOrFail($id);
        $material = Material::where('estado','=','1')->get();
        return view('recurso_mantenimiento.confirmar', compact('recurso_mantenimiento','material'));
    }

}
