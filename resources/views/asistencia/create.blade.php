@extends('layouts.master')

@section("titulo","ASISTENCIAS")

@section("content")

    <div class="page-wrapper" style="margin-top: 100px">

        <div class="container">
            <h1>Registrar</h1>
            <form method="POST" action="{{route('asistencia.store')}}">
                @csrf
    
                <div class="form-group row">
    
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Fecha</label>
                        <input type="text" class="form-control" name="" id="" value="{{$fecha->dia}} - {{$fecha->mes}} - {{$fecha->ano}}" disabled>
                        <input class="form-control" type="text" id="idFecha" name="idFecha"  value="{{$fecha->idFecha}}"style="visibility: collapse">
                        <input class="form-control" type="text" id="a" name="a"  value="{{$fecha->ano}}"style="visibility: collapse">
                        <input class="form-control" type="text" id="m" name="m"  value="{{$fecha->mes}}"style="visibility: collapse">
                    </div>
    
                    <div class="col-4" style="margin-bottom: 30px">
                        <label for="" class="form-label">Trabajador</label>
                        <select class="form-control selectpicker" name="idTrabajador" id="idTrabajador" required>
                            <option selected disabled>Seleccione una opcion</option>
                            @foreach ($trabajadores as $item)
                                <option value="{{ $item->idTrabajador}}"> {{ $item->nombreT }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="col-3" style="margin-bottom: 30px">
                        <label for="" class="form-label">Opción</label>
                        <select class="form-control selectpicker" name="estadoA" id="estadoA" required>
                            <option selected disabled>Seleccione una opcion</option>
                            <option value="0"> NO REGISTRADO </option>
                            <option value="1"> FALTÓ </option>
                            <option value="2"> TARDANZA </option>
                            <option value="3"> ASISTIÓ </option>
                        </select>
                    </div>
    
                    <div class="col-3" style="margin-bottom: 30px">
                        <label for="" class="form-label">Horas extra</label>
                        <input type="text" class="form-control" name="hora_extra" id="hora_extra">
                    </div>
                    
    
                </div>
    
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Grabar
                </button>
    
                <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => $m])}}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i>Atrás</a>
            </form>
        </div>
    
        <div class="table-responsive" style="margin-top: 10px">
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>Trabajador</th>
                <th>Estado</th>
                <th>Horas Extra</th>
            </tr>
            </thead>
            <tbody>
                @if(count($asistencias)<=0)
                <tr>
                    <td colspan="4"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($asistencias as $item)
                    <tr>
                        <td>{{$item->nombreT}}</td>
                        <td>
                            @if ($item->estadoA == '1')
                                <label for="" style="color: red">FALTÓ</label>
                            @elseif($item->estadoA =='2')
                                <label for="" style="color: orange">TARDANZA</label>
                            @elseif($item->estadoA =='3')
                                <label for="" style="color: green">ASISTIÓ</label>
                            @elseif($item->estadoA =='0')
                                <label for="" style="color: rgb(119, 119, 119)">NO REGISTRADO</label>
                            @endif
                        <td>{{$item->hora_extra}}</td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        </div>


    </div>


@endsection