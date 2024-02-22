@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")

@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
            
        <div class="container">
            <h1>Editar Roles</h1>

            <form method="POST" action="{{route('rol.update',$rol->idRol)}}">
                @method('put')
                @csrf

                <div class="form-group row">

                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Denomiación</label>
                        <input type="text" class="form-control" name="nombreR" id="nombreR" value="{{$rol->nombreR}}">
                    </div>

                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Sueldo Mensual (S/.)</label>
                        <input type="text" class="form-control" name="sueldo" id="sueldo" value="{{$rol->sueldo}}">
                    </div>

                </div>

                <br><br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
                <a href="{{route('cancelar.rol')}}" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </form>

        </div>
    </div>



@endsection