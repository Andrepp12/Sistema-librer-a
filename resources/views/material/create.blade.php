@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{route('material.store')}}">
            @csrf
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control @error('Nombre') is-invalid @enderror" id="Nombre" name="Nombre">
                @error('Nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="Cantidad" class="form-label">Cantidad:</label>
                <input type="text" class="form-control @error('Cantidad') is-invalid @enderror" id="Cantidad" name="Cantidad">
                @error('Cantidad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
            <a href="{{route('material.cancelar')}}" class="btn btn-danger"><i class="fas fa-ban"> Cancelar</i></a>
        </form>
    </div>
</div>
@endsection


