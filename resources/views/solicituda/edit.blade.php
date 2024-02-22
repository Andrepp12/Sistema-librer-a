@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Registrar Nueva Solicitud</h2>
        
      

        <form  method="POST" action="{{route('solicituda.update',$solicituda->idSolicitud)}}">
            @method('put')
            @csrf
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Proveedor<span class="star-red">*</span></label>
                    <input id="id_usuario" name="id_usuario" type="text" class="form-control"  value="{{$solicituda->id_usuario}}" style="display: none">

                        @foreach ($usuario as $itemC)
                            @if ($itemC->id_usuario == $solicituda->id_usuario)

                                <input  type="text" class="form-control"  value="{{$itemC->nombre}}" >

                            @endif 
                        @endforeach

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Razon<span class="star-red">*</span></label>
                    <textarea id="razon"  name="razon" type="text" class="form-control" > {{$solicituda->razon}} </textarea>
                
                </div>
            </div>
           
            <div class="col-md-12" style="margin-top: 30px">
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Aprobar
                </button>
    
                <a href="" class="btn btn-danger">
                    <i class="fas fa-ban"></i>Cancelar</a>
            </div>
        

      
        </form>


        
        
        
        
        
    </div>
</div>
@endsection