@extends('layouts.master')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Recurso</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($desecho_recurso)<=0) <tr>
                        <td colspan="5">No hay registros</td>
                        </tr>
                        @else
                        @foreach($desecho_recurso as $item)
                        <tr>
                            <td>{{$item->idRecuDesecho}}</td>
                            <td>{{$item->recursobibliografico->titulo}}</td>
                            <td>{{$item->Descripcion}}</td>
                            <td>{{$item->Fecha}}</td>
                            <td>
                              
                                <a href="{{route('desecho_recurso.confirmar',$item->idRecuDesecho)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Eliminar</a>
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
            <a href="{{route('desecho_recurso.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Nuevo registro</a>
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
            {{$desecho_recurso->links()}}
        </div>
    </div>
</div>
@endsection




