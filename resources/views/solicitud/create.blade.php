@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Registrar Nueva Solicitud</h2>
        
      

        <form method="POST" action="{{ route('solicitud.store') }}">
            @csrf

            <div class="col-md-6">
                <div class="form-group">
                    <label>Proveedores <span class="star-red">*</span></label>
                    <select name="id_usuario" class="select form-control" id="miSelect" >
                        <option  selected="selected">Select</option>
                        @foreach ($usuario as $item)
                            @if($item->id_rol==5)
                            <option value="{{$item->id_usuario}}"> {{$item->nombre}} </option>
                            @endif
                            
                         @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Razon<span class="star-red">*</span></label>
                    <textarea id="razon" name="razon" type="text" class="form-control" ></textarea>
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