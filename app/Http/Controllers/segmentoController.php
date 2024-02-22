<?php

namespace App\Http\Controllers;
use App\Models\Segmento;
use App\Models\dashboard;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class segmentoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    const PAGINATION=100;
    public function index(Request $request)
    {
      
        $busqueda =$request->get('buscarpor');   
        $segmento=Segmento::where('estado','=','1')->where('segmento_name','like','%'.$busqueda.'%')->paginate($this::PAGINATION);
        $dashboard = dashboard::all();
        return view('segmento.index',compact('segmento','busqueda','dashboard'));
    }

    public function pdf(){
        $segmento = Segmento::all();
        $dashboard = dashboard::all();
        $pdf = PDF::loadView('segmento.pdf', compact('segmento','dashboard'));
        
         return $pdf->download('segmento.pdf');
         return view('segmento.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $segmento = Segmento::all();
        $dashboard = dashboard::all();
        return view('segmento.create',compact('segmento','dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'segmento_name',
            'segmento_descripcion',
            'estado',
            'idDasbhboard',
            
           
        ],
        [
            
        ]);
        $segmento = new Segmento();
        $segmento->segmento_name=$request->segmento_name;
        $segmento->segmento_descripcion=$request->segmento_descripcion;
        $segmento->estado='1';
        $segmento->idDasbhboard=$request->idDasbhboard;
        $segmento->save();
        return redirect()->route('segmento.index')->with('datos','registro');
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
        $segmento = Segmento::findorfail($id);
        $dashboard = dashboard::all();
        return view('segmento.edit',compact('segmento','dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=request()->validate([
            'segmento_name',
            'segmento_descripcion',
            'estado',
            'idDasbhboard',
            
        ],
        [
        ]);
        $segmento = Segmento::findorfail($id);
        $segmento->segmento_name=$request->segmento_name;
        $segmento->segmento_descripcion=$request->segmento_descripcion;
        $segmento->estado='1';
        $segmento->idDasbhboard=$request->idDasbhboard;
        $segmento->save();
        return redirect()->route('segmento.index')->with('datos','registro actualizado');
    }

    public function confirmar($id){
        $segmento = Segmento::findorfail($id);
        return view('segmento.confirmar',compact('segmento'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $segmento=Segmento::findorfail($id);
        $segmento->estado='0';
        $segmento->save();
        return redirect()->route('segmento.index')->with('datos','Registro eliminado');
    }
}
