@extends('layouts.master')@section('titulo','SEGMENTO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="container">
        <h1>Editar Segmento</h1>
        <form method="POST" action="{{route('segmento.update',$segmento->idsegmento)}}">
            @method('put')
            @csrf
             
            <div class="form-group">
                <label class="control-label">ID SEGMENTO:</label>
                    <input type="text" id="idsegmento" name="idsegmento" value="{{$segmento->idsegmento}}" disabled/>
            </div>

            <div class="form-group">
                <label class="control-label">Nombre segmento:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="segmento_name" name="segmento_name" value="{{$segmento->segmento_name}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Segmendo descripcion:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="segmento_descripcion" name="segmento_descripcion" value="{{$segmento->segmento_descripcion}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

          

            <div class="form-group">
                <label class="control-label">Dashboard:</label>
               <select class="form-control" id="idDasbhboard" name="idDasbhboard">
                @foreach ($dashboard as $itemdashboard)
                    <option value="{{$itemdashboard['idDasbhboard']}}"  {{$itemdashboard->idDasbhboard == $segmento->idDasbhboard ? 'selected' :''}}> {{$itemdashboard['pdf']}}"</option>
                @endforeach
               </select>
                  
                   
            </div>


                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('segmento.cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div></div></div>
@endsection