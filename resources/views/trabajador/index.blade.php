@extends('layouts.master')

@section("titulo","TRABAJADORES")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <a href="{{route('trabajador.create')}}" class="btn btn-primary" style="margin-right: 30px">
            <i class="fa fa-plus"></i>Nuevo Registro
        </a>
    
      <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Contrato (Fecha vencimiento)</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @if(count($trabajador)<=0)
                <tr>
                    <td colspan="6"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($trabajador as $item)
                    <tr>
                        <td>{{$item->idTrabajador}}</td>
                        <td>{{$item->nombreT}}</td>
                        <td>{{$item->nombreR}}</td>
                        <td>{{$item->cv_dia}} - {{$item->cv_mes}} - {{$item->cv_ano}}</td>
                        <td>
                            @if (Session::get('rol') != '9')
                                @if ($item->estado == '1')
                                    <a href="{{route('trabajador.edit',$item->idTrabajador)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Editar</a>
                                    <a href="{{route('trabajador.confirmar',$item->idTrabajador)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Despedir</a>
                                @else
                                    <a href="{{route('trabajador.edit',$item->idTrabajador)}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i>Contratar</a>
                                @endif    
                            @endif
                            
                            @if (Session::get('rol') == '1' || Session::get('rol') == '9')
                                <a href="{{route('trabajador.ano',$item->idTrabajador)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Control</a>
                            @endif
                
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
            </table>
        </div>
        
    </div>
@endsection    

