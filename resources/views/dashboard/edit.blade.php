@extends('layouts.master')@section('titulo','DASHBOARD')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    <div class="container">
        <h1>Editar DASHBOARD</h1>
        <form method="POST" action="{{route('dashboard.update',$dashboard->idDasbhboard)}}">
            @method('put')
            @csrf
            
            <div class="form-group">
                <label class="control-label">Imagen</label>
                <div>
                    <img src="/{{$dashboard->pdf}}"  width="20%" alt="">
                </div>
                <span id='upload-file-name'></span>
                <input  id="pdf" name="pdf" type="file" class="hidden"/>
            </div>
 
           



                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('dashboard.cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div></div>
</div>
@endsection