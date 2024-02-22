@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Devoluciones</h2>
        <a href="{{ route('devolucion.created') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Nuevo Registro
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Cliente</th>
                 <th>Fecha</th>
                 <th>Razon</th>
                 <th>Opciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($devolucion)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($devolucion as $item)
                    <tr>
                    <td>{{$item->idDevolucion}}</td>
                    <td>{{$item->Nombres}} {{$item->Apellidos}}</td>
                    <td>{{$item->fechadev}}</td>
                    <td>{{$item->razon}}</td>
                    <td>
                        <form method="POST" action="{{route('devolucion.destroy',$item->idDevolucion)}}">
                            @method('delete')
                            @csrf
                                {{-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a> --}}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                @endif
              </tbody>
           </table>
           {{$devolucion->links()}}
        </div>
    </div>
</div>
@endsection
