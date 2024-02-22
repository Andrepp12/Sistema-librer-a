<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\userModel;
use App\Models\rolesModel;
use App\Models\Cliente;
use App\Models\Segmento;
use Illuminate\Http\Request;
 
class logControler extends Controller
{
    const PAGINATION=10;
    public function showlogin(){
        return view('login');
    }
    public function bienvenido(){
        $user = userModel::all();
        $rol = rolesModel::all();
        return view('usuario.create',compact('user','rol'));
    }

    public function verificaLogin(Request $request){
        //return dd($request->all());

        $data=request()->validate([
            'name'=>'required',
            'password'=>'required'
        ],
        [
            'name.required'=>'Ingrese Usuario',
            'password.required'=>'Ingrese contraseña',
        ]);
        if(Auth::attempt($data))
        {
            $con='ok';
        }
        $name=$request->get('name');
        $name2=$request->get('password');
        
        //return dd($request->all());
      
        $query = userModel::where('nombre', '=', $name)->first();
        $rol = $query->id_rol;
        //dd($name);
        $passsword = $query->passsword;
       // dd($name, $name2,$nombre,$passsword);
      
        if($rol == '2'){
            $cliente=Cliente::where('estado','=','1')->where('DNI','like','%'.$name.'%')->paginate($this::PAGINATION);
            $segmento= Segmento::all();
            return view('clientes.vistaCliente',compact('cliente','segmento'));
        }
        else{
            if($name2==$passsword){
               // return redirect()->route('home');
              // dd($rol);
              session_start();

    // Establecer el valor de la variable en la sesión
            session(['rol' => $rol]);
                return view('layouts.master',compact('rol'));  
            }
            else{
                return back()->withErrors(['password'=>'Contraseña no valida'])->withInput(request(['name','password']));
            }
        }
        
    }

    public function salir(){
        Auth::logout();
        return redirect('/');
    }
}
