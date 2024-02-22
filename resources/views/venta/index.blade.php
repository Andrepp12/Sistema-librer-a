@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Ventas</h2>
        <a href="{{route('ventas.create')}}" class="btn btn-primary">
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
                 <th>Total</th>
                 <th>Opciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($venta)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($venta as $item)
                    <tr>
                    <td>{{$item->idVenta}}</td>
                    <td>{{$item->Nombres}} {{$item->Apellidos}}</td>
                    <td>{{$item->fecha}}</td>
                    <td>{{$item->total}}</td>
                    <td>
                        <form method="POST" action="{{route('venta.destroy',$item->idVenta)}}">
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
           {{$venta->links()}}
        </div>
    </div>
</div>
@endsection
