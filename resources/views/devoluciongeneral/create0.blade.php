@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <form action="{{route('devoluciongeneral.store')}}" method="POST">
                @csrf
                
                <h2 class="header-title">Registrar Nueva Devolución</h2><br>
                <div class="form-group">
                    <label>Proveedores <span class="star-red">*</span></label>
                    <select name="id_usuario" class="select form-control" id="miSelect" onchange="updateInputValue()">
                        <option  selected="selected">Select</option>
                        @foreach ($proveedor as $item)
                            @if($item->id_rol==5)
                            <option value="{{$item->id_usuario}}"> {{$item->nombre}} </option>
                            @endif
                            
                         @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Devolucion <span class="star-red">*</span></label>
                    <select name="idDevolucion" class="select form-control" id="miSelect" >
                        <option  selected="selected">Select</option>
                        @foreach ($devolucion as $item)
                           
                            <option value="{{$item->idDevolucion}}"> Venta: {{$item->idVenta}} | Fecha: {{$item->fechadev}} | Razon: {{$item->razon}}</option>
                          
                            
                         @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <label>Motivo<span class="star-red">*</span></label>
                    <input type="text" name="motivo" id="motivo"  class="form-control">
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
        </div>
    </div>
</div>
@endsection
