@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")
@section('content')

    <div class="page-wrapper">
        <div class="container" style="margin-top: 100px">
            <h1>Desea Eliminar Registro?</h1>
            <h3>Código: {{$balance->idBalance}}</h3><br>
            <h3>Mes: @if($balance->mes == 1)
                        ENERO
                    @elseif($balance->mes == 2)
                        FEBRERO
                    @elseif($balance->mes == 3)
                        MARZO
                    @elseif($balance->mes == 4)
                        ABRIL
                    @elseif($balance->mes == 5)
                        MAYO
                    @elseif($balance->mes == 6)
                        JUNIO
                    @elseif($balance->mes == 7)
                        JULIO
                    @elseif($balance->mes == 8)
                        AGOSTO
                    @elseif($balance->mes == 9)
                        SEPTIEMBRE
                    @elseif($balance->mes == 10)
                        OCTUBRE
                    @elseif($balance->mes == 11)
                        NOVIEMBRE
                    @elseif($balance->mes == 12)
                        DICIEMBRE
                    @endif
            </h3>
            <a href="{{route('balance.ver',$balance->idBalance)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Ver</a>
            <br><br>
    
    
            <form method="POST" action="{{route('balance.destroy',$balance->idBalance)}}">
                @method('delete')
                {{-- {{ method_field('DELETE') }} --}}
                @csrf
                <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i> SÍ</button>
                <a href="{{route('balance.pindex',$balance->ano)}}" class="btn btn-primary"><i class="fas fa-times-circle"></i>NO</a>
              </form>
        </div>
    </div>

@endsection