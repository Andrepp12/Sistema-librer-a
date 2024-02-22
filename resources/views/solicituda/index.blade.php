@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        
        <br><br>
        <h3 class="header-title">Solicitudes de Seleccion</h3> 
        <div class="table-responsive">
            <table class="table table- responsive">
             <thead>
               <tr>
                 <th>ID</th>
                 
                 <th>Proveedor</th>
                 <th>Razon</th>
                 <th>Estado</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                @if(count($solicitud)<=0)
                <tr>
                    <td colspan="8"><h4>No hay registros</h4></td>
                </tr>
                @else
                @foreach ($solicitud as $item)
                    <tr>
                    <td>{{$item->idSolicitud}}</td>
                   
                        @foreach ($usuario as $itemC)
                        @if ($itemC->id_usuario == $item->id_usuario)
                            <td>
                                {{$itemC->nombre}}
                            </td>

                        @endif
                        @endforeach

                    <td style="text-align: justify;"><p style="white-space: normal;">{{$item->razon}}</p></td>
                    <td>{{$item->estado}}</td>
                    
             
                    <td>
                        <a href="{{route('solicituda.edit', $item->idSolicitud)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Editar</a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                    </tr>
                @endforeach
                @endif
              </tbody>
           </table>
           {{$solicitud->links()}}
        </div>
   
        </div>
    </div>
</div>
@endsection