@extends('layouts.master')

@section('titulo','CLIENTE')

@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
    
    <h3>LISTADO DE CLIENTES</h3>

    <div class="card">
        <div class="card-header">
          
    
          <div class="card-tools">
            
          </div>
          <a href="{{route("clientes.create")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nuevo Registro</a>
          <a href="{{route("Clientes.pdf")}}" class="btn btn-danger"> <i class="fas fa-plus"></i> PDF </a>
          <nav  class="navbar navbar-light  float-right">    
            <form class="form-inline my-2" method="GET">
              <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Busqueda por descripcion" aria-label="Search" value="{{$busqueda}}">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>
      </nav>
        </div> 
        @if(session('datos'))
            <div id="mensaje">
              <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{session('datos')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
            @endif


        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">DNI</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Notas</th>
                <th scope="col">OPCIONES</th>
              </tr>
            </thead>
            <tbody>
                @if(count($cliente)<=0)
                <tr>
                  <td colspan="3">NO HAY REGISTROS</td>
                </tr>
                @else
                        @foreach ($cliente as $itemcliente)
                      <tr>
                        <th scope="row">{{$itemcliente->Id_cliente}}</th>
                        <td>{{$itemcliente->Nombres}}</td>
                        <td>{{$itemcliente->Apellidos}}</td>
                        <td>{{$itemcliente->DNI}}</td>
                        <td>{{$itemcliente->FechaNacimiento}}</td>
                        <td>{{$itemcliente->Edad}}</td>
                        <td>{{$itemcliente->Correo}}</td>
                        <td>{{$itemcliente->Celular}}</td>
                        <td>{{$itemcliente->Notas}}</td>

                        <td>  
                            <a href="{{route('clientes.edit',$itemcliente->Id_cliente)}}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Editar</a> 
                            <a href="{{route('clientes.confirmar',$itemcliente->Id_cliente)}}" class="btn btn-danger btn-sm"> <i class="fas fa-edit"></i> Eliminar</a>
                        </td>
                        <td>  

                          
                          <a href="{{route('cliente.creaUsuarioCliente',$itemcliente->Id_cliente)}}" 
                            class="btn btn-info btn-sm {{ $itemcliente->creaPerfil == '1' ? 'disabled' : '' }}"> 
                            <i class="fas fa-edit"></i> Crear perfil
                         </a>
                          
                          
                      </td>
                      <td>
                        <a href="{{route('enviarCorreo', [$itemcliente->Correo,$itemcliente->Id_cliente])}}" 
                          class="btn btn-info btn-sm @if ($itemcliente->sendCorreo == '1') disabled @endif">
                          <i class="fas fa-edit"></i> Send correo
                       </a>
                        
                      </td>


                      {{-- <a href="{{ route('enviaCorreoSegmento', [$itemcliente->Correo, $itemcliente->idsegmento]) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-edit"></i> Enviar
                      </a> --}}
                      </tr>
                      @endforeach
                @endif
            </tbody>
          </table>

          {{$cliente->links()}}
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
    </div>
  </div>
@endsection

<script>
  function bloquearBoton(boton) {
    boton.disabled = true;
  }
</script>

@section('script')
      <script>
        setTimeout(function() {
          document.querySelector('#mensaje').remove();
        }, 2000);
      </script>
@endsection