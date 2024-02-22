@extends('layouts.master')@section('titulo','SEGMENTO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    <div class="container">
        
        <h1>¿Desea eliminar registro?  <br> 
            id segmento:{{$segmento->idsegmento}} <br>
            segmento name: {{$segmento->segmento_name}} <br>
            segmento descripcion: {{$segmento->segmento_descripcion}} <br>
            
        </h1>
        <form method="POST" action="{{route('segmento.destroy',$segmento->idsegmento)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> <i class="fas fa-check-square"></i>
                SI
            </button>
            <a href="{{route('segmento.cancelar')}}" class="btn btn-primary" > <i class="fas fa-times-circle"></i>NO</a>
        </form>
    </div>  </div>  </div>
@endsection