@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{route('recurso_mantenimiento.update',$recurso_mantenimiento->idRecurso)}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="idRecurso" class="form-label">ID:</label>
                <input type="text" class="form-control" id="idRecurso" name="idRecurso" value="{{$recurso_mantenimiento->idRecurso}}" disabled>
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label">MKateriales:</label>
                <input type="text" class="form-control @error('idMaterial') is-invalid @enderror" id="idMaterial" name="idMaterial" value="{{$recurso_mantenimiento->idMaterial}}">
                @error('Nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="Fecha" class="form-label">Fecha:</label>
                <input type="text" class="form-control @error('Fecha') is-invalid @enderror" id="Fecha" name="Fecha" value="{{$recurso_mantenimiento->Fecha}}">
                @error('Fecha')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CantidadUso" class="form-label">Cantidad de uso:</label>
                <input type="text" class="form-control @error('CantidadUso') is-invalid @enderror" id="CantidadUso" name="CantidadUso" value="{{$recurso_mantenimiento->CantidadUso}}">
                @error('CantidadUso')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Costo" class="form-label">Costo:</label>
                <input type="text" class="form-control @error('Costo') is-invalid @enderror" id="Costo" name="Costo" value="{{$recurso_mantenimiento->Costo}}">
                @error('Costo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
          
    
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Actualizar</button>
            <a href="{{route('recurso_mantenimiento.cancelar')}}" class="btn btn-danger"><i class="fas fa-ban">Cancelar</i></a>
        </form>
    </div>
</div>
@endsection

