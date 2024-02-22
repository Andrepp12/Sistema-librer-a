@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Ingresar Nuevo Detalle de Operación</h2>
       
        <form method="POST" action="{{ route('detalle.store') }}">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label> Almacén<span class="star-red">*</span></label>
                    <input type="text" name="idAlmacen" value="{{ $almacen->idAlmacen }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Recurso<span class="star-red">*</span></label>
                    <input type="text" name="idRecurso"  required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Cantidad<span class="star-red">*</span></label>
                    <input type="text" name="cantidad"  required>
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