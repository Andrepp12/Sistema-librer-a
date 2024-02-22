@extends('layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Material</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cantidad de uso</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($recurso_mantenimiento)<=0) <tr>
                        <td colspan="5">No hay registros</td>
                        </tr>
                        @else
                        @foreach($recurso_mantenimiento as $item)
                        <tr>
                            <td>{{$item->idRecurso}}</td>
                            <td>{{$item->idMaterial}}</td>
                            <td>{{$item->Fecha}}</td>
                            <td>{{$item->CantidadUso}}</td>
                            <td>{{$item->Costo}}</td>
                            <td>
                                <a href="{{route('recurso_mantenimiento.edit',$item->idRecurso)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Editar</a>
                                <a href="{{route('recurso_mantenimiento.confirmar',$item->idRecurso)}}" class="btn btn-success btn-sm"><i class="fas fa-check"></i>Activar</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                </tbody>
            </table>
        </div>
        <form class="d-flex" role="search">
            <div class="input-group mb-3">
                <input value="{{$buscarpor}}" name="buscarpor" type="search" class="form-control" placeholder="Ingrese el término a buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
    
        </form>
        <div>
            <a href="{{route('recurso_mantenimiento.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Nuevo registro</a>
        </div>
        @if(session('datos'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div>
            {{$recurso_mantenimiento->links()}}
        </div>
    </div>
</div>
@endsection




