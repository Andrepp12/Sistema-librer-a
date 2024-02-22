@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>{{ $almacen->nombre }}</h2>
        
        <br><br>
        <h3 class="header-title">Libros</h3> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#librosModal">
            Ver Libros
        </button>

        <!-- Modal -->
        <div class="modal fade" id="librosModal" tabindex="-1" aria-labelledby="librosModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="librosModalLabel">{{ $almacen->nombre }} - Libros</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>COD</th>
                                        <th>NOMBRE</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($libros)<=0)
                                        <tr>
                                            <td colspan="3"><h4>No hay registros</h4></td>
                                        </tr>
                                    @else
                                        @foreach($libros as $libro)
                                            <tr>
                                                <td>{{ $libro->idRecurso }}</td>
                                                <td>{{ $libro->titulo }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-info btn-sm me-1" data-dismiss="modal" onclick="seleccionarLibro('{{ $libro->titulo }}', '{{ $libro->idRecurso }}')">
                                                            <i class="fa fa-edit"></i> Seleccionar
                                                        </button>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{ $libros->links() }}
                        </div>
                    </div>
                    <!-- Elimina el botón de cierre en el pie de página -->
                </div>
            </div>
        </div>
        <br>
    </div>
</div>

<script>
    function seleccionarLibro(titulo, idRecurso) {
        // Redirigir a la vista de creación con el título y el idRecurso
        window.location.href = '{{ route("desecho_recurso.create") }}?titulo=' + encodeURIComponent(titulo) + '&idRecurso=' + encodeURIComponent(idRecurso);
    }
</script>

@endsection
