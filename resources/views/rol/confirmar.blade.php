@extends('layouts.master')

@section("titulo","ROLES")
@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h1>Desea Eliminar Registro?</h1>
            <h3>Código: {{$rol->idRol}}</h3><br>
            <h3>Denominación: {{$rol->nombreR}}</h3><br>
            <h3>Sueldo Mensual: S/. {{$rol->sueldo}}</h3>
            <br><br>
    
    
            <form method="POST" action="{{route('rol.destroy',$rol->idRol)}}">
                @method('delete')
                {{-- {{ method_field('DELETE') }} --}}
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> SÍ</button>
                <a href="{{route('cancelar.rol')}}" class="btn btn-primary"><i class="fas fa-times-circle"></i>NO</a>
              </form>
        </div>
    </div>


@endsection