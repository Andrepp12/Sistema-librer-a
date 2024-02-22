@extends('layouts.master')

@section("titulo","ROLES")

@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
            
        <div class="container">
            <h1>Registrar</h1>
            <form method="POST" action="{{route('rol.store')}}">
                @csrf

                <div class="form-group row">

                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Denominación</label>
                        <input type="text" class="form-control" name="nombreR" id="nombreR">
                    </div>

                    <div class="col-6" style="margin-bottom: 30px">
                        <label for="" class="form-label">Sueldo Mensual (S/.)</label>
                        <input type="text" class="form-control" name="sueldo" id="sueldo">
                    </div>

                </div>



                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Grabar
                </button>

                <a href="{{route('cancelar.rol')}}" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </form>
        </div>

    </div>


@endsection