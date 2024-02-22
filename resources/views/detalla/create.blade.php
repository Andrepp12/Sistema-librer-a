@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Ingresar Nuevo Detalle de Operación</h2>
        {{-- Mostrar mensajes de error --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('detalle.store') }}">
            @csrf
            <div class="mb-3">
                    <label for="Nombre" class="form-label">Almacen:</label>
                    <input type="text" class="form-control " name="idAlmacen" value="{{ $almacen->idAlmacen }}" readonly>
            </div>
            <div class="mb-3">
                <label for="Recurso" class="form-label">Recurso:</label>
                <select class="form-control" name="idRecurso" required>
                    @foreach($recursos as $recurso)
                        <option value="{{ $recurso->idRecurso }}">{{ $recurso->titulo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="Recurso" class="form-label">Cantidad:</label>
                    <input type="text" class="form-control " name="cantidad"  required>
            </div>
      
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
            <a href="{{route('detalle.cancelar')}}" class="btn btn-danger"><i class="fas fa-ban"> Cancelar</i></a>
       

      
    </form>
    </div>
</div>
@endsection