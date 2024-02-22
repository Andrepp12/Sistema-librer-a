<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Segmento;
use App\Models\rolesModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PAGINATION=10;
    public function index(Request $request)
    { 
      
        $busqueda =$request->get('buscarpor');   
        $cliente=Cliente::where('estado','=','1')->where('DNI','like','%'.$busqueda.'%')->paginate($this::PAGINATION);
        $segmento= Segmento::all();
        return view('clientes.index',compact('cliente','busqueda','segmento'));
    }

    public function pdf()
    {
        $clientes = Cliente::all();
        
        $pdf = PDF::loadView('clientes.pdf', compact('clientes'));
        
         return $pdf->download('boleta.pdf');
         return view('clientes.pdf');
    }
    
    public function pdfSegmentadocLI(){
        $cliente = Cliente::all();
        $segmento = Segmento::all();
        $pdf = PDF::loadView('clientes.pdfSegmentados', compact('cliente','segmento'));
        
         return $pdf->download('ClienteSegmentados.pdf');
         return view('ClienteSegmentados.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();
        return view('clientes.create',compact('cliente'));
    }

    /*
     * Store a newly created resource in storage.
     * Id_cliente integer auto_increment,
  Nombres VARCHAR(50),
  Apellidos VARCHAR(50),
  DNI VARCHAR(8),
  FechaNacimiento DATE,
  Edad INT,
  Correo VARCHAR(20),
  Celular VARCHAR(9),
  Notas VARCHAR(50),
  idsegmento integer,
  estado tinyint,
  foreign key(idsegmento) references SEGMENTO(idsegmento)
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'Nombres',
            'Apellidos',
            'DNI',
            'FechaNacimiento',
            'Edad',
            'Correo',
            'Celular',
            'Notas',
            'idsegmento',
           'sendCorreo',
           'creaPerfil'
        ],
        [
            
        ]);
        $cliente = new cliente();
        $cliente->Nombres=$request->Nombres;
        $cliente->Apellidos=$request->Apellidos;
        $cliente->DNI=$request->DNI;
        $cliente->FechaNacimiento=$request->FechaNacimiento;
        $cliente->Edad=$request->Edad;
        $cliente->Correo=$request->Correo;
        $cliente->Celular=$request->Celular;
        $cliente->Notas=$request->Notas;
        $cliente->estado='1';
        $cliente->idsegmento='1';
        $cliente->sendCorreo='0';
        $cliente->creaPerfil='0';
        $cliente->save();
        return redirect()->route('clientes.index')->with('datos','registro');
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
        $cliente = cliente::findorfail($id);
        $segmento = segmento::all();
        return view('clientes.edit',compact('cliente','segmento'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=request()->validate([
            'Nombres',
            'Apellidos',
            'DNI',
            'FechaNacimiento',
            'Edad',
            'Correo',
            'Celular',
            'Notas',
            'idsegmento',
            'sendCorreo',
            'creaPerfil'
            
        ],
        [
        ]);
        $cliente = cliente::findorfail($id);
        $cliente->Nombres=$request->Nombres;
        $cliente->Apellidos=$request->Apellidos;
        $cliente->DNI=$request->DNI;
        $cliente->FechaNacimiento=$request->FechaNacimiento;
        $cliente->Edad=$request->Edad;
        $cliente->Correo=$request->Correo;
        $cliente->Celular=$request->Celular;
        $cliente->Notas=$request->Notas;
        $cliente->idsegmento='1';
        $cliente->estado='1';
        $cliente->sendCorreo=$request->sendCorreo;
        $cliente->creaPerfil=$request->creaPerfil;
        
        $cliente->save();
        return redirect()->route('clientes.index')->with('datos','registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmar($id){
        $cliente = Cliente::findorfail($id);
        return view('clientes.confirmar',compact('cliente'));
    }

    public function creaUsuarioCliente($idd){
        $cliente = Cliente::findorfail($idd);
        $cliente->creaPerfil='1';
        $cliente->save();
        $rol = rolesModel::all();
        return view('usuario.create',compact('cliente','rol'));
    }
    
    // public function edit(string $id)
    // {
    //     $cliente = cliente::findorfail($id);
    //     $segmento = segmento::all();
    //     return view('clientes.edit',compact('cliente','segmento'));
    // }



    public function destroy(string $id)
    {
        $cliente=Cliente::findorfail($id);
        $cliente->estado='0';
        $cliente->save();
        return redirect()->route('clientes.index')->with('datos','Registro eliminado');
    
    }

    public function indexClienteSeg(Request $request)
    {
      
        $busqueda =$request->get('buscarpor');   
        $cliente=Cliente::where('estado','=','1')->where('DNI','like','%'.$busqueda.'%')->paginate($this::PAGINATION);
        $Segmento = segmento::all();
        return view('clientes.clienteSeg',compact('cliente','busqueda','Segmento'));
    }

    public function editSegmento(string $id)
    {
        $cliente = cliente::findorfail($id);
        $segmento = segmento::all();
        return view('clientes.segmentacion',compact('cliente','segmento'));
    }


    public function update2(Request $request, string $id)
    {
        $data=request()->validate([
            'Nombres',
            'Apellidos',
            'DNI',
            'FechaNacimiento',
            'Edad',
            'Correo',
            'Celular',
            'Notas',
            'idsegmento',
             
        ],
        [
        ]);
        $cliente = cliente::findorfail($id);
        $cliente->Nombres=$request->Nombres;
        $cliente->Apellidos=$request->Apellidos;
        $cliente->DNI=$request->DNI;
        $cliente->FechaNacimiento=$request->FechaNacimiento;
        $cliente->Edad=$request->Edad;
        $cliente->Correo=$request->Correo;
        $cliente->Celular=$request->Celular;
        $cliente->Notas=$request->Notas;
        $cliente->idsegmento=$request->idsegmento;
        $cliente->estado='1';
        $cliente->save();
        return redirect()->route('cliente.seg')->with('datos','registro actualizado');
    }
}
