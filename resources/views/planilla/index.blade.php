@extends('layouts.master')

@section("titulo","PLANILLA")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">

        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">{{$a}}</h1>


        <a href="{{route('planilla.createP',$a)}}" class="btn btn-primary" style="margin-right: 30px">
            <i class="fa fa-plus"></i>Activar
        </a>
    
        <a href="{{route('planilla.ano')}}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i>Atrás</a>
    
    
      <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Código</th>
                <th>Mes</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
                @if(count($planilla)<=0)
                <tr>
                    <td colspan="4"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($planilla as $item)
                    <tr>
                    <td>{{$item->idPlanilla}}</td>
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
                        <a href="{{route('planilla.pdf',$item->idPlanilla)}}" class="btn btn-warning btn-sm"><i class="fa fa-book"></i>Genera Reporte</a>
                        <a href="{{route('planilla.confirmar',$item->idPlanilla)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        </div>


    </div>

@endsection

