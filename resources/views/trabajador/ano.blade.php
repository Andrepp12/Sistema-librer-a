@extends('layouts.master')

@section("titulo","TRABAJADORES")
@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h3 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque; gap: 80px">
                <label for="">CÓDIGO: {{$trabajador->idTrabajador}}</label>
                <label for="">NOMBRES: {{$trabajador->nombreT}}</label>
                <label for="">ROL: {{$trabajador->nombreR}}</label></h3>
    
            <a href="{{route('trabajador.index')}}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>Atrás</a>
    
    
    
            <div class="row" style="gap: 10px;margin-top: 20px">
                <div class="col-md-12">
                    <a href="{{route('trabajador.mes', ['a' => 2022, 'id' => $trabajador->idTrabajador])}}" class="col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2022
                    </a>
                  </div>
    
                <div class="col-md-12">
                    <a href="{{route('trabajador.mes', ['a' => 2023, 'id' => $trabajador->idTrabajador])}}" class="col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2023
                    </a>
                </div>

                <div class="col-md-12">
                    <a href="{{route('trabajador.mes', ['a' => 2024, 'id' => $trabajador->idTrabajador])}}" class="col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2024
                    </a>
                </div>
    
            </div>
        </div>

    </div>


@endsection