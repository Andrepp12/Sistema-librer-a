@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Recursos Adquiridos</h2>
        <a href="{{route('recurso.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Nuevo Registro
        </a>
        <br><br>
        <h3 class="header-title">Recursos Bibliograficos</h3> 
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Titulo</th>
                 <th>Autor</th>
                 <th>Precio</th>
                 <th>Editorial</th>
                 <th>Stock</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($recurso)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($recurso as $item)
                    <tr>
                    <td>{{$item->idRecurso}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->autor}}</td>
                    <td>{{$item->preciou}}</td>
                    <td>{{$item->editorial}}</td>
                    <td>{{$item->stock}}</td>
                    <td>
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                    </tr>
                @endforeach
                @endif
              </tbody>
           </table>
           {{$recurso->links()}}
        </div>
        <br>
        <h3 class="header-title">Recursos No Bibliograficos</h3> 
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Nombre Producto</th>
                 <th>Precio</th>
       
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($recurson)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($recurson as $item)
                    <tr>
                    <td>{{$item->idRecurso}}</td>
                    <td>{{$item->nombreP}}</td>

                    <td>{{$item->preciou}}</td>
             
                    <td>
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                    </tr>
                @endforeach
                @endif
              </tbody>
           </table>
           {{$recurso->links()}}
        </div>
    </div>
</div>
@endsection