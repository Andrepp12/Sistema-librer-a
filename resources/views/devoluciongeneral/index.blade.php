@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Devoluciones</h2>
        <a href="{{ route('devoluciongeneral.created') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Nuevo Registro
        </a>
        <a href="{{route("DevolucionGeneral.pdf")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> PDF </a>
        <br><br>
        <div class="table-responsive">
            <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Proveedor</th>
                 <th>Fecha</th>
                 <th>Motivo</th>
                 
               </tr>
             </thead>
             <tbody>
                @if(count($devoluciong)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($devoluciong as $item)
                    <tr>
                        <td>{{$item->idDevolucion_G}}</td>
                    <td> 
                        @foreach ($proveedor as $itemC)
                        @if ($itemC->id_usuario == $item->id_usuario)
                          
                                {{$itemC->nombre}}
                            

                        @endif
                        @endforeach</td>
                    <td>{{$item->fechag}}</td>
                    <td>{{$item->motivo}}</td>
                    <td>
                        <form method="POST" action="{{route('devoluciongeneral.destroy',$item->idDevolucion_G)}}">
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
           {{$devoluciong->links()}}
        </div>
    </div>
</div>
@endsection
