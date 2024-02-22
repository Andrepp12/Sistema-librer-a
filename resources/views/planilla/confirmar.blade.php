@extends('layouts.master')

@section("titulo","PLANILLA")
@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h1>Desea Eliminar Registro?</h1>
            <h3>Código: {{$planilla->idPlanilla}}</h3><br>
            <h3>Mes: @if($planilla->mes == 1)
                        ENERO
                    @elseif($planilla->mes == 2)
                        FEBRERO
                    @elseif($planilla->mes == 3)
                        MARZO
                    @elseif($planilla->mes == 4)
                        ABRIL
                    @elseif($planilla->mes == 5)
                        MAYO
                    @elseif($planilla->mes == 6)
                        JUNIO
                    @elseif($planilla->mes == 7)
                        JULIO
                    @elseif($planilla->mes == 8)
                        AGOSTO
                    @elseif($planilla->mes == 9)
                        SEPTIEMBRE
                    @elseif($planilla->mes == 10)
                        OCTUBRE
                    @elseif($planilla->mes == 11)
                        NOVIEMBRE
                    @elseif($planilla->mes == 12)
                        DICIEMBRE
                    @endif
            </h3>
    
    
            <form method="POST" action="{{route('planilla.destroy',$planilla->idPlanilla)}}">
                @method('delete')
                {{-- {{ method_field('DELETE') }} --}}
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> SÍ</button>
                <a href="{{route('planilla.pindex',$planilla->ano)}}" class="btn btn-primary"><i class="fas fa-times-circle"></i>NO</a>
              </form>
        </div>
    </div>
@endsection