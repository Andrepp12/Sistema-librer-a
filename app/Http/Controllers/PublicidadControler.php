<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Segmento;
use Illuminate\Http\Request;

class PublicidadControler extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    const PAGINATION=10;
    public function index(Request $request)
    {
        $busqueda =$request->get('idsegmento');   
        $cliente=Cliente::where('estado','=','1')->where('idsegmento','like','%'.$busqueda.'%')->paginate($this::PAGINATION);
        $segmento= Segmento::all();
        return view('publicidad.index',compact('cliente','busqueda','segmento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
