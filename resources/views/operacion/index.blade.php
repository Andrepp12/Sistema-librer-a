@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Compras</h2>
        <a href="{{route('operacion.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i>Comprar Recursos Bibliograficos
        </a>
        <a href="{{route('operacion2.create')}}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Comprar Recursos No Bibliograficos
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Proveedor</th>
                 <th>Fecha</th>
                 <th>Sub Total</th>
                 <th>IGV</th>
                 <th>Total</th>
                 <th>Opciones</th>
               </tr>
             </thead>
             <tbody>
               
                @foreach ($operacion as $item)
                    <tr>
                    <td>{{$item->idoperacion}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->fecha}}</td>
                    <td>S/. {{$item->subtotal}}</td>
                    <td>S/. {{$item->igv}}</td>
                    <td>S/. {{$item->total}}</td>
                    <td>
                        <form method="POST" action="">
                            @method('delete')
                            @csrf
                                {{-- <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a> --}}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
               
              </tbody>
           </table>
           {{$operacion->links()}}
        </div>
    </div>
</div>
@endsection
