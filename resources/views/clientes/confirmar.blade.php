@extends('layouts.master')@section('titulo','CLIENTE')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
       
  
    <div class="container">
        
        <h1>¿Desea eliminar registro?  <br> 
            Id_cliente:{{$cliente->Id_cliente}} <br>
            Nombres: {{$cliente->Nombres}} <br>
            Apellidos: {{$cliente->Apellidos}} <br>
            DNI: {{$cliente->DNI}} <br>
            FechaNacimiento: {{$cliente->FechaNacimiento}} <br>
            Edad: {{$cliente->Edad}} <br>
            Correo: {{$cliente->Correo}} <br>
            Celular: {{$cliente->Celular}} <br>
        </h1>
        <form method="POST" action="{{route('clientes.destroy',$cliente->Id_cliente)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> <i class="fas fa-check-square"></i>
                SI
            </button>
            <a href="{{route('cancelar')}}" class="btn btn-primary" > <i class="fas fa-times-circle"></i>NO</a>
        </form>
    </div>
</div>
</div>
@endsection