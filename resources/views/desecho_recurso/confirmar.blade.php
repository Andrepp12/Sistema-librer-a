@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
    <form method="POST" action="{{route('desecho_recurso.destroy',$desecho_recurso->idRecuDesecho)}}">
        @method('delete')
        @csrf
        <div class="mb-3">
            <label for="idRecuDesecho" class="form-label">ID:</label>
            <input type="text" class="form-control" id="idRecuDesecho" name="idRecuDesecho" value="{{$desecho_recurso->idRecuDesecho}}" disabled>
        </div>
        <div class="mb-3">
            <label for="idRecurso" class="form-label">Recurso bibliografico:</label>
            <input type="text" class="form-control @error('idRecurso') is-invalid @enderror" id="idRecurso" name="idRecurso" value="{{$desecho_recurso->idRecurso}}" disabled>
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control @error('Descripcion') is-invalid @enderror" id="Descripcion" name="Descripcion" value="{{$desecho_recurso->Descripcion}}" disabled>
        </div>
        <div class="mb-3">
            <label for="Fecha" class="form-label">Fecha:</label>
                <input type="text" class="form-control @error('Fecha') is-invalid @enderror" id="Fecha" name="Fecha" value="{{$desecho_recurso->Fecha}}" disabled>
        </div>
       

        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i>Eliminar</button>
        <a href="{{route('desecho_recurso.cancelar')}}" class="btn btn-primary"><i class="fas fa-times-circle">Cancelar</i></a>
    </form>
</div>
</div>
@endsection