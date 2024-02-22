@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <form method="POST" action="{{ route('desecho_recurso.store') }}">
            @csrf
            <div class="mb-3">
                <label for="idAlmacen" class="form-label">Seleccione almacén</label>
                <select class="form-control" name="idAlmacen" id="select-project">
                    @foreach($almacenes as $almacen)
                        <option value="{{ $almacen->idAlmacen }}">{{ $almacen->nombre }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="TituloLibro" class="form-label">Título del Libro:</label>
                    <input type="text" class="form-control" id="TituloLibro" name="TituloLibro" value="{{ $titulo }}" readonly>
                </div>
                
                <div class="mb-3">
                    <label for="IdRecursoLibro" class="form-label">ID del Recurso del Libro:</label>
                    <input type="text" class="form-control" id="IdRecursoLibro" name="IdRecursoLibro" value="{{ $idRecurso }}" readonly>
                    <input type="hidden" name="idRecurso" value="{{ $idRecurso }}">

                </div>

                <!-- Botón para ver los libros del almacén -->
                <button type="button" class="btn btn-info" onclick="verLibros()">Ver Libros</button>
            </div>

            <div class="mb-3">
                <label for="Identificador" class="form-label">Identificador:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="Identificador" name="Identificador" readonly>
                    <button type="button" class="btn btn-secondary" onclick="generarIdentificador()">Generar</button>
                </div>
            </div>

            <div class="mb-3">
                <label for="Descripcion" class="form-label">Observaciones:</label>
                <input type="text" class="form-control @error('Descripcion') is-invalid @enderror" id="Descripcion" name="Descripcion">
                @error('Descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
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

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
            <a href="{{ route('desecho_recurso.cancelar') }}" class="btn btn-danger"><i class="fas fa-ban"> Cancelar</i></a>
        </form>
    </div>
</div>

<script>
    function generarIdentificador() {
        // Generar las dos letras iniciales "DE"
        var letrasIniciales = "DE";
        
        // Generar un código aleatorio numérico de longitud 4
        var codigoNumerico = Math.random().toString().substr(2, 4);
        
        // Combinar las letras iniciales con el código numérico
        var codigo = letrasIniciales + codigoNumerico;
        
        // Asignar el código al campo Identificador
        document.getElementById('Identificador').value = codigo;
    }

    function verLibros() {
        // Obtener el ID del almacén seleccionado
        var idAlmacen = document.getElementById('select-project').value;

        // Redirigir a la vista que muestra los libros del almacén
        window.location.href = '/desecho_recurso/vista/' + idAlmacen;
    }
</script>
@endsection
