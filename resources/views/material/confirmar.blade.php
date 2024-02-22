@extends('layouts.master')
@section('content')
<div class="card-header">
    <h5>Eliminar Material</h5>
</div>
<div class="card-body table-border-style">
    <form method="POST" action="{{route('material.destroy',$material->idMaterial)}}">
        @method('delete')
        @csrf
        <div class="mb-3">
            <label for="idMaterial" class="form-label">ID:</label>
            <input type="text" class="form-control" id="idMaterial" name="idMaterial" value="{{$material->idMaterial}}" disabled>
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre" value="{{$material->Nombre}}" disabled>
        </div>
        
        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control @error('Cantidad') is-invalid @enderror" id="Cantidad" name="Cantidad" value="{{$material->Cantidad}}" disabled>
            @error('capacidad')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i>Eliminar</button>
        <a href="{{route('material.cancelar')}}" class="btn btn-primary"><i class="fas fa-times-circle">Cancelar</i></a>
    </form>
</div>
@endsection