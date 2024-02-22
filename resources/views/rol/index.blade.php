@extends('layouts.master')

@section("titulo","ROLES")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">

        <a href="{{route('rol.create')}}" class="btn btn-primary" style="margin-right: 30px">
            <i class="fa fa-plus"></i>Nuevo Registro
        </a>
    
      <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Código</th>
                <th>Denominación</th>
                <th>Sueldo Mensual</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @if(count($rol)<=0)
                <tr>
                    <td colspan="4"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($rol as $item)
                    <tr>
                        <td>{{$item->idRol}}</td>
                        <td>{{$item->nombreR}}</td>
                        <td>S/. {{$item->sueldo}}</td>
                        <td>
                            <a href="{{route('rol.edit',$item->idRol)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Editar</a>
                            <a href="{{route('rol.confirmar',$item->idRol)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
            </table>
        </div>

    
        
    </div>

@endsection