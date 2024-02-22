@extends('layouts.master')

@section("titulo","PLANILLA")
@section('content')

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <div class="row" style="gap: 10px">
                <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Planilla</h1>
                <div class="col-md-12">
                    <a href="{{route('planilla.pindex',"2022")}}" class="col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2022
                    </a>
                  </div>
    
                  <div class="col-md-12">
                    <a href="{{route('planilla.pindex',"2023")}}" class=" col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2023
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="{{route('planilla.pindex',"2024")}}" class=" col-md-12 btn btn-primary">
                        <i class="fa fa-plus"></i>2024
                    </a>
                  </div>
            </div>
        </div>
    </div>

@endsection