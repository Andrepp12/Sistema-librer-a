@extends('layouts.master')

@section("titulo","TRABAJADORES")

@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h1>Editar Trabajador</h1>
    
            <form method="POST" action="{{route('trabajador.update',$trabajador->idTrabajador)}}">
                @method('put')
                @csrf
    
                <div class="form-group row">
    
                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreT" id="nombreT" value="{{$trabajador->nombreT}}">
                    </div>
    
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Día Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_dia" id="cv_dia" value="{{$trabajador->cv_dia}}">
                    </div>
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Mes Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_mes" id="cv_mes" value="{{$trabajador->cv_mes}}">
                    </div>
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Año Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_ano" id="cv_ano" value="{{$trabajador->cv_ano}}">
                    </div>
    
                    <div class="col-6" style="margin-bottom: 30px">
                        <label style="margin-right:10px">Rol</label>
                        <select class="form-control selectpicker" name="idRol" id="idRol" required>
                            @foreach ($roles as $item)
                                @if( $item->idRol == $trabajador->idRol)
                                    <option selected value="{{$item->idRol}}"> {{ $item->nombreR }} // Sueldo: S/.{{ $item->sueldo }} </option>
                                @else
                                    <option value="{{$item->idRol}}"> {{ $item->nombreR }} // Sueldo: S/.{{ $item->sueldo }} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
    
                </div>
    
    
                <br><br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
                <a href="{{route('cancelar.trabajador')}}" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </form>
    
        </div>
    </div>


@endsection