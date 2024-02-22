@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">{{$a}}</h1>
    
        @php
            date_default_timezone_set("America/Lima");
            $date = date('Y-m-d');
            $d = date('d');
            $m = date('m');
            $aPHP = date('Y');
        @endphp
    
        <a href="{{route('balance.create')}}" class="btn btn-primary" style="margin-right: 30px">
            <i class="fa fa-plus"></i>Nuevo Registro
        </a>
        <a href="{{route('balance.pdf2',$a)}}" class="btn btn-warning" style="margin-right: 30px"><i class="fa fa-book"></i>Reporte Anual</a>
    
        <a href="{{route('balance.ano')}}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i>Atrás</a>
    
    
      <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Código</th>
                <th>Mes</th>
                <th>Fecha Actualización (d-m-a)</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @if(count($balance)<=0)
                <tr>
                    <td colspan="4"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($balance as $item)
                    <tr>
                    <td>{{$item->idBalance}}</td>
                    <td>
                        @if($item->mes == 1)
                            ENERO
                        @elseif($item->mes == 2)
                            FEBRERO
                        @elseif($item->mes == 3)
                            MARZO
                        @elseif($item->mes == 4)
                            ABRIL
                        @elseif($item->mes == 5)
                            MAYO
                        @elseif($item->mes == 6)
                            JUNIO
                        @elseif($item->mes == 7)
                            JULIO
                        @elseif($item->mes == 8)
                            AGOSTO
                        @elseif($item->mes == 9)
                            SEPTIEMBRE
                        @elseif($item->mes == 10)
                            OCTUBRE
                        @elseif($item->mes == 11)
                            NOVIEMBRE
                        @elseif($item->mes == 12)
                            DICIEMBRE
                        @endif
                    </td>
                    <td>
                        {{$item->dia}} - {{$item->mes}} - {{$item->ano}}
                        @if($item->mes == $m)
                            <label for="" style="color: green">En Curso</label>
                        @else
                            <label for="" style="color: red">Finalizado</label>
                        @endif
                    </td>
                    <td>
                        @if ($item->mes == $m)
                            <a href="{{route('balance.edit',$item->idBalance)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>Editar</a>
                            <a href="{{route('balance.confirmar',$item->idBalance)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                        @else
                            <a href="{{route('balance.ver',$item->idBalance)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Ver</a>
                        @endif
                        <a href="{{route('balance.pdf',$item->idBalance)}}" class="btn btn-warning btn-sm"><i class="fa fa-book"></i>Genera Reporte</a>
                    </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
            </table>
            {{$balance->links()}}
        </div>

    </div>

    @endsection

