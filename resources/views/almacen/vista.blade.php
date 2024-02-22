@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2>{{ $almacen->nombre }}</h2>
        <a href="{{ route('detalla.create', ['idAlmacen' => $almacen->idAlmacen]) }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Ingreso nuevo
        </a>
        <br><br>
        <h3 class="header-title">Libros</h3> 
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>COD</th>
                 <th>NOMBRE</th>
                 <th>CANTIDAD</th>
                 <th>STOCK</th>
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
                        <td>{{ $libro->cantidad }}</td>
                        <td>{{ $libro->stock}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="" class="btn btn-info btn-sm me-1"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @endif
              </tbody>
           </table>
           {{ $libros->links() }}
        </div>
        <br>
    </div>
</div>
@endsection