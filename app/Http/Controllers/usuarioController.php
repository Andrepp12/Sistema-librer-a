<?php

namespace App\Http\Controllers;
use App\Models\userModel;
use App\Models\rolesModel;
use App\Models\Cliente;
use Illuminate\Http\Request;

class usuarioController extends Controller
{ 
    
    // public function index(Request $request)
    // {
      
    //     $usuario = userModel::with('rolesModel')->get();
    //     //dd($usuario); // Verifica los resultados de la consulta
    //     $roles = rolesModel::all();
    //     return view('usuario.index',compact('usuario','roles'));
    // }

    const PAGINATION=10;
    public function index(Request $request)
    {
        $busqueda =$request->get('id_rol');   
        $usuario=userModel::where('id_rol','like','%'.$busqueda.'%')->paginate($this::PAGINATION);
        $roles= rolesModel::all();
        return view('usuario.index',compact('usuario','busqueda','roles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = userModel::all();
        $rol = rolesModel::all();
        $cliente = null;
        return view('usuario.create',compact('user','rol','cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'usuario',
            'passsword',
            'nombre',
            'id_rol'
           
        ],
        [
            
        ]);//=Hash::make($request->password);
        $usuario = new userModel();
        $usuario->usuario=$request->usuario;
        $usuario->passsword=$request->passsword;
        $usuario->nombre=$request->nombre;
        $usuario->id_rol=$request->id_rol;
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos','registro');
    
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
        $usuario = userModel::findorfail($id);
        $roles = rolesModel::all();
        return view('usuario.edit',compact('usuario','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=request()->validate([
            'usuario',
            'passsword',
            'nombre',
            'id_rol'
           
        ],
        [
            
        ]);//=Hash::make($request->password);
        $usuario = userModel::findorfail($id);
        $usuario->usuario=$request->usuario;
        $usuario->passsword=$request->passsword;
        $usuario->nombre=$request->nombre;
        $usuario->id_rol=$request->id_rol;
        $usuario->save();
        return redirect()->route('usuario.index')->with('datos','registro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
