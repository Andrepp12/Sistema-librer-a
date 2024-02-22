@extends('layouts.master')

@section("titulo","TRABAJADORES")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Control Año {{$a}}</h1>
        <h3 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque; gap: 80px">
            <label for="">CÓDIGO: {{$trabajador->idTrabajador}}</label>
            <label for="">NOMBRES: {{$trabajador->nombreT}}</label>
            <label for="">ROL: {{$trabajador->nombreR}}</label></h3>
            <h3 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: rgb(196, 255, 199); gap: 80px">
                @if($m == 1)
                            ENERO
                        @elseif($m == 2)
                            FEBRERO
                        @elseif($m == 3)
                            MARZO
                        @elseif($m == 4)
                            ABRIL
                        @elseif($m == 5)
                            MAYO
                        @elseif($m == 6)
                            JUNIO
                        @elseif($m == 7)
                            JULIO
                        @elseif($m == 8)
                            AGOSTO
                        @elseif($m == 9)
                            SEPTIEMBRE
                        @elseif($m == 10)
                            OCTUBRE
                        @elseif($m == 11)
                            NOVIEMBRE
                        @elseif($m == 12)
                            DICIEMBRE
                        @endif</h3>
    
        <a href="{{route('trabajador.mes', ['a' => $a, 'id' => $trabajador->idTrabajador])}}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i>Atrás</a>
    
      <div class="table-responsive" style="margin-top: 10px">
    
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="text-align: center">Fecha</th>
                <th style="text-align: center">Asistencia</th>
                <th style="text-align: center">Horas extra</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($asistencias as $item)
                    <tr>
                        <td style="text-align: center">{{$item->dia}} - {{$item->mes}} - {{$item->ano}}</td>
                        <td style="text-align: center">
                            @if ($item->estadoA == '1')
                                <label for="" style="color: red">FALTÓ</label>
                            @elseif($item->estadoA =='2')
                                <label for="" style="color: orange">TARDANZA</label>
                            @elseif($item->estadoA =='3')
                                <label for="" style="color: green">ASISTIÓ</label>
                            @elseif($item->estadoA =='0')
                                <label for="" style="color: rgb(119, 119, 119)">NO REGISTRADO</label>
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if ($item->hora_extra == 0)
                                <label for="" style="color: rgb(119, 119, 119)">0</label>
                            @else
                                <label for="" style="color: rgb(0, 0, 0)">{{$item->hora_extra}}</label>
                            @endif</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>

    @endsection
