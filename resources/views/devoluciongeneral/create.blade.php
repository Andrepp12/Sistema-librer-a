@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div>
            <h2 class="header-title">Registrar Nueva Devolución</h2><br>
            
            <div class="form-group">
                <label>Proveedores <span class="star-red">*</span></label>
                <select name="id_usuario" class="select form-control" id="miSelect">
                    <option  selected="selected">Select</option>
                    @foreach ($usuario as $item)
                        @if($item->id_rol==5)
                        <option value="{{$item->id_usuario}}"> {{$item->nombre}} </option>
                        @endif
                        
                     @endforeach
                </select>
            </div>

        </div>
    </div>        
</div>
@endsection
