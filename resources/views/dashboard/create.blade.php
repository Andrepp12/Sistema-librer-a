@extends('layouts.master')@section('titulo','DASHBOARD')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    
<div class="container">
    <h1>Registro Nuevo</h1>
    <form method="POST" action="{{route('dashboard.store')}}">
        @csrf
        
       
        <div class="form-group">
            <label class="control-label">Imagen Referencial:</label>
            
                <input  id="pdf" name="pdf" type="file" class="hidden"/>
                @error('stock')

                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
        </div>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                Grabar 
            </button>
            <a href="{{route('dashboard.cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
        
    </form>
</div>
</div>
</div>
@endsection