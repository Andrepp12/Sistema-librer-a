@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista de Proveedores</h2>
        <a href="{{route('proveedores.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Nuevo Registro
        </a>
        <br><br>
        <h3 class="header-title">Proveedores</h3> 
        <div class="table-responsive">
            <table class="table table- responsive">
             <thead>
               <tr>
                 <th>ID</th>
                 
                 <th>Correo</th>
                 <th>Nombres</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($usuario)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                
                    @foreach($usuario as $item)
                    <tr>
                    <td>{{$item->id_usuario}}</td>
                    <td>{{$item->usuario}}</td>
                    <td style="text-align: justify;"><p style="white-space: normal;">{{$item->nombre}}</p></td>
                
                    <td>
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                    </tr>
                    @endforeach
                @endif
                   
        
              </tbody>
           </table>

        </div>
   
        </div>
    </div>
</div>
@endsection