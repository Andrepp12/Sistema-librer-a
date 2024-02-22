@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Registrar Nuevo Recurso</h2>
        
        <div class="col-md-6">
            <div class="form-group">
                <label>Country <span class="star-red">*</span></label>
                <select class="select form-control" id="miSelect" onchange="mostrarCamposInput()">
                    <option  selected="selected">Select</option>
                    <option value="1">RECURSO BIBLIOGRAFICO</option>
                    <option value="2">RECURSO NO BIBLIOGRAFICO</option>
                </select>
            </div>
        </div>

        <form method="POST" action="{{ route('recursobibliografico.store') }}">
            @csrf

    
   
        <div id="camposInput1" style="display: none;">
            <div class="col-md-6">
                <div class="form-group">   
                    <input type="text" name="tipo" id="tipo" value="RECURSO BIBLIOGRAFICO" style="display: none;" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Titulo<span class="star-red">*</span></label>
                    <input id="titulo" name="titulo" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Autor<span class="star-red">*</span></label>
                    <input id="autor" name="autor" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Editorial<span class="star-red">*</span></label>
                    <input id="editorial" name="editorial" type="text" class="form-control">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label>Precio Unidad<span class="star-red">*</span></label>
                    <input id="preciou" name="preciou" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Stock<span class="star-red">*</span></label>
                    <input id="preciou" name="stock" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 30px">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Grabar
                </button>
    
                <a href="" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </div>
            
        </div>

      
    </form>


    <form method="POST" action="{{ route('recurso.store') }}">
        @csrf


    <div id="camposInput2" style="display: none;">
        <div class="col-md-6">
            <div class="form-group">   
                <input type="text" name="tipo" id="tipo" value="RECURSO NO BIBLIOGRAFICO"  style="display: none;" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Nombre del Producto<span class="star-red">*</span></label>
                <input id="nombreP" name="nombreP" type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Precio Por Unidad<span class="star-red">*</span></label>
                <input id="preciou" name="preciou" type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Stock<span class="star-red">*</span></label>
                <input id="preciou" name="stock" type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 30px">
            <button class="btn btn-primary">
                <i class="fa fa-save"></i>Grabar
            </button>

            <a href="" class="btn btn-danger">
                <i class="fas fa-ban"></i>Cancelar</a>
        </div>
    </div>
   
</form>
        <script>
            function mostrarCamposInput() {
                var select = document.getElementById("miSelect");
                var camposInput = document.getElementById("camposInput1");
        
                if (select.value == "1") {
                    camposInput1.style.display = "block";
                } else {
                    camposInput1.style.display = "none";
                }

                if (select.value== "2") {
                    camposInput2.style.display = "block";
                } else {
                    camposInput2.style.display = "none";
                }
            }
        </script>
       
        
        
        
        
        
    </div>
</div>
@endsection