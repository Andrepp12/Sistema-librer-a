@extends('layouts.master')

@section("titulo","ASISTENCIAS")


@section("content")
    <div class="page-wrapper" style="margin-top: 100px">

        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Control Año {{$a}}</h1>
        <a href="{{route('asistencia.mes',$a)}}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i>Atrás</a>
    
      <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th style="text-align: center">Fecha</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($fechas as $item)
                    <tr>
                        <td style="text-align: center">{{$item->dia}} - {{$item->mes}} - {{$item->ano}}</td>
                        <td>
                            <a href="{{route('asistencia.registrar', ['a' => $a, 'm' => $m,'id' => $item->idFecha])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Registrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>

    </div>
@endsection
