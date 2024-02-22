@extends('layouts.master')

@section("titulo","TRABAJADORES")
@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h1>Desea Despedir Trabajador?</h1>
            <h3>Código: {{$trabajador->idTrabajador}}</h3><br>
            <h3>Nombre: {{$trabajador->nombreT}}</h3><br>
            <h3>Rol: {{$trabajador->nombreR}}</h3><br>
            <h3>Sueldo Mensual: S/. {{$trabajador->sueldo}}</h3>
            <br><br>
    
    
            <form method="POST" action="{{route('trabajador.destroy',$trabajador->idTrabajador)}}">
                @method('delete')
                {{-- {{ method_field('DELETE') }} --}}
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> SÍ</button>
                <a href="{{route('cancelar.trabajador')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i>NO</a>
              </form>
        </div>
    </div>


@endsection