@extends('layouts.master')

@section("titulo","TRABAJADORES")

@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
            
        <div class="container">
            <h1>Registrar</h1>
            <form method="POST" action="{{route('trabajador.store')}}">
                @csrf

                <div class="form-group row">

                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreT" id="nombreT">
                    </div>

                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Día Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_dia" id="cv_dia">
                    </div>
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Mes Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_mes" id="cv_mes">
                    </div>
                    <div class="col-2" style="margin-bottom: 30px">
                        <label for="" class="form-label">Año Vence Contrato</label>
                        <input type="text" class="form-control" name="cv_ano" id="cv_ano">
                    </div>

                    <div class="col-6" style="margin-bottom: 30px">
                        <label style="margin-right:10px">Rol</label>
                        <select class="form-control selectpicker" name="idRol" id="idRol" required>
                            <option selected disabled>Seleccione una opcion</option>
                            @foreach ($roles as $item)
                                <option value="{{ $item->idRol}}"> {{ $item->nombreR }} // Sueldo: S/.{{ $item->sueldo }} </option>
                            @endforeach
                        </select>
                    </div>

                </div>



                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Grabar
                </button>

                <a href="{{route('cancelar.trabajador')}}" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </form>
        </div>
    </div>



@endsection