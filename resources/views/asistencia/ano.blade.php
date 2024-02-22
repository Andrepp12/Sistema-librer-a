@extends('layouts.master')

@section("titulo","ASISTENCIA")

@section('content')
    <div class="page-wrapper">
        <div class="container" style="margin-top: 100px">
            <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Asistencia</h1>
            <div class="row" style="gap: 10px">
                <div class="col-md-12">
                    <a href="{{route('asistencia.mes',"2022")}}" class="col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2022
                    </a>
                  </div>
    
                  <div class="col-md-12">
                    <a href="{{route('asistencia.mes',"2023")}}" class=" col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2023
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="{{route('asistencia.mes',"2024")}}" class=" col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2024
                    </a>
                  </div>
            </div>
        </div>
    </div>

@endsection