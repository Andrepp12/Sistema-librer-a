@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{route('desecho_recurso.update',$desecho_recurso->idRecuDesecho )}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="idRecuDesecho " class="form-label">ID:</label>
                <input type="text" class="form-control" id="idRecuDesecho " name="idRecuDesecho " value="{{$desecho_recurso->idRecuDesecho }}" disabled>
            </div>

            <div class="mb-3">
                <label for="idRecurso" class="form-label">Recurso bibliografico:</label>
                <select class="form-control" name="idRecurso" id="idRecurso">
                    @foreach($recursobibliografico as $item)
                    <option value="{{$item['idRecurso']}}">{{$item['titulo']}}</option>
                    @endforeach
                </select>
                
            </div>
    
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control @error('Descripcion') is-invalid @enderror" id="Descripcion" name="Descripcion" value="{{$desecho_recurso->Descripcion}}">
                @error('CantidadUso')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="Fecha" class="form-label">Fecha:</label>
                <input type="date" class="form-control @error('Fecha') is-invalid @enderror" id="Fecha" name="Fecha" value="{{$desecho_recurso->Fecha}}">
                @error('Fecha')
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

