@extends('layouts.master')@section('titulo','SEGMENTO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    <div class="container">
        <h1>Registro Nuevo</h1>
        <form method="POST" action="{{route('segmento.store')}}">
            @csrf
             
            <div class="form-group">
                <label class="control-label">Nombre segmento:</label> 
                    <input type="text" class="form-control @error('nombreplato') is-invalid @enderror" 
                        placeholder="Ingrese nombre plato" id="segmento_name" name="segmento_name" />
                    @error('nombreplato')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">Dashboard:</label>
               <select class="form-control @error('idDasbhboard') is-invalid  @enderror" id="idDasbhboard" name="idDasbhboard" >
                @foreach ($dashboard as $itemdashboard)
                    <option value="{{$itemdashboard['idDasbhboard']}}"> {{$itemdashboard['pdf']}}</option>
                @endforeach
               </select>
               @error('idDasbhboard')
                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label class="control-label">segmento descripcion:</label>
                    <input min="0" type="text" class="form-control @error('precio') is-invalid @enderror" 
                        placeholder="Ingrese precio" id="segmento_descripcion" name="segmento_descripcion"/>
                    @error('precio')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            
                <button  type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('segmento.cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div></div></div>
@endsection