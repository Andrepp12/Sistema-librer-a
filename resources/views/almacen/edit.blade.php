@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{route('almacen.update',$almacen->idAlmacen)}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="idAlmacen" class="form-label">ID:</label>
                <input type="text" class="form-control" id="idAlmacen" name="idAlmacen" value="{{$almacen->idAlmacen}}" disabled>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$almacen->nombre}}">
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Actualizar</button>
            <a href="{{route('almacen.cancelar')}}" class="btn btn-danger"><i class="fas fa-ban">Cancelar</i></a>
        </form>
    </div>
</div>
@endsection

