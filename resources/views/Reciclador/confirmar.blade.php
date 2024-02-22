@extends('layouts.master')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
    <form method="POST" action="{{route('reciclador.destroy',$reciclador->IdReciclador)}}">
        @method('delete')
        @csrf
        <div class="mb-3">
            <label for="IdReciclador" class="form-label">ID:</label>
            <input type="text" class="form-control" id="IdReciclador" name="IdReciclador" value="{{$reciclador->IdReciclador}}" disabled>
        </div>
        <div class="mb-3">
            <label for="NombreInstitucion" class="form-label">Nombre de la institucion:</label>
            <input type="text" class="form-control @error('NombreInstitucion') is-invalid @enderror" id="NombreInstitucion" name="NombreInstitucion" value="{{$reciclador->NombreInstitucion}}" disabled>
        </div>
        <div class="mb-3">
            <label for="Representante" class="form-label">Representante:</label>
            <input type="text" class="form-control @error('Representante') is-invalid @enderror" id="Representante" name="Representante" value="{{$reciclador->Representante}}" disabled>
        </div>
        <div class="mb-3">
            <label for="Contacto" class="form-label">Contacto:</label>
            <input type="text" class="form-control @error('Contacto') is-invalid @enderror" id="Contacto" name="Contacto" value="{{$reciclador->Contacto}}" disabled>
        </div>


        <button type="submit" class="btn btn-danger"><i class="fas fa-check-square"></i>Eliminar</button>
        <a href="{{route('reciclador.cancelar')}}" class="btn btn-primary"><i class="fas fa-times-circle">Cancelar</i></a>
    </form>
</div>
</div>
@endsection