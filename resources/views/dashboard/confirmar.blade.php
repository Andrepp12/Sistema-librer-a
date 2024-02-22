

@extends('layouts.master')@section('titulo','DASHBOARD')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
       
  
    <div class="container">
        
        <h1>¿Desea eliminar dashboard?  <br> 
            <div class="form-group">
                <label class="control-label">Imagen</label>
                <div>
                    <img src="/{{$dashboard->pdf}}"  width="20%" alt="">
                </div>
                <span id='upload-file-name'></span>
               
            </div>
        </h1>
        <form method="POST" action="{{route('dashboard.destroy',$dashboard->idDasbhboard)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> <i class="fas fa-check-square"></i>
                SI
            </button>
            <a href="{{route('dashboard.cancelar')}}" class="btn btn-primary" > <i class="fas fa-times-circle"></i>NO</a>
        </form>
    </div>
</div>
</div>
@endsection