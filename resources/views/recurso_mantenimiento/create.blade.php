@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{route('recurso_mantenimiento.store')}}">
            @csrf
            <div class="mb-3">
                <label for="idRecurso" class="form-label">Recurso bibliografico:</label>
                <select class="form-control" name="idRecurso" id="idRecurso">
                    @foreach($recursobibliografico as $item)
                    <option value="{{$item['idRecurso']}}">{{$item['titulo']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="idMaterial" class="form-label">Materiales:</label>
                <select class="form-control" name="idMaterial" id="idMaterial">
                    @foreach($material as $item)
                    <option value="{{$item['idMaterial']}}">{{$item['Nombre']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="Fecha" class="form-label">Fecha:</label>
                <input type="date" class="form-control @error('Fecha') is-invalid @enderror" id="Fecha" name="Fecha">
                @error('Fecha')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CantidadUso" class="form-label">Cantidad de uso:</label>
                <input type="number" class="form-control @error('CantidadUso') is-invalid @enderror" id="CantidadUso" name="CantidadUso">
                @error('CantidadUso')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Costo" class="form-label">Costo:</label>
                <input type="number" class="form-control @error('Costo') is-invalid @enderror" id="Costo" name="Costo">
                @error('Costo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
            <a href="{{route('recurso_mantenimiento.cancelar')}}" class="btn btn-danger"><i class="fas fa-ban"> Cancelar</i></a>
        </form>
    </div>
</div>
@endsection


