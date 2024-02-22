<?php

namespace App\Http\Controllers;
use App\Models\dashboard;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PAGINATION=6;
    public function index(Request $request)
    {
        $busqueda =$request->get('buscarpor');   
        $dashboard=dashboard::where('estado','=','1')->paginate($this::PAGINATION);
        return view('dashboard.index',compact('dashboard','busqueda'));
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dashboard = dashboard::all();
        return view('dashboard.create',compact('dashboard'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'pdf',
            'estado',
            
            
        ],
        [
            'pdf',
            'estado',
            
        ]);
        $dashboard = new dashboard();
        $dashboard->pdf=$request->pdf;
       
       
        $dashboard->estado='1';
        
        $dashboard->save();
        return redirect()->route('dashboard.index')->with('datos','registro');
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
        $dashboard = dashboard::findorfail($id);
       
        return view('dashboard.edit',compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=request()->validate([
            'pdf',
            'estado',
            
            
        ],
        [
            'pdf',
            'estado',
            
        ]);
        // $plato = plato::findorfail($id);
        $dashboard = dashboard::findorfail($id);
        $dashboard->pdf=$request->pdf;
        $dashboard->estado='1';
        
        $dashboard->save();
        return redirect()->route('dashboard.index')->with('datos','registro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dashboard=dashboard::findorfail($id);
        $dashboard->estado='0';
        $dashboard->save();
        return redirect()->route('dashboard.index')->with('datos','Registro eliminado');
    }


    public function confirmar($id){
        $dashboard = dashboard::findorfail($id);
        return view('dashboard.confirmar',compact('dashboard'));
    }
}
 