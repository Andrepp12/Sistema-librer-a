@extends('layouts.master')
@section('content')
<div class="page-wrapper">
  <div class="content container-fluid">
     
    <h3>LISTADO DE CLIENTES</h3>

    <div class="card">
        <div class="card-header">
          
    
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <a href="{{route("clientes.create")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nuevo Registro</a>
          <a href="{{route("CliSegmentado.pdf")}}" class="btn btn-primary"> <i class="fas fa-plus"></i>PDF</a>
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
                <th scope="col">Segmento</th>
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
                        <td>{{$itemcliente->Segmento->segmento_name}}</td>
                        
                        <td>  
                            <a href="{{route('editSegmento',$itemcliente->Id_cliente)}}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Editar</a> 
                           
                        </td>

                       
                      
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
      </div> </div>
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