@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Recursos Adquiridos</h2>
        
        <form method="POST" action="{{ route('almacen.store') }}">
            @csrf

    
   
    
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nombre de almacen<span class="star-red">*</span></label>
                    <input id="nombre" name="nombre" type="text" class="form-control">
                </div>
            </div>
      
            <div class="col-md-12" style="margin-top: 30px">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Grabar
                </button>
    
                <a href="" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </div>
       

      
    </form>
    </div>
</div>
@endsection