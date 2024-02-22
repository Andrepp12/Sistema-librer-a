@extends('layouts.master')@section('titulo','SEGMENTO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     
    <h3>LISTADO DE Segmentos</h3>

    <div class="card">
        <div class="card-header">
          
    
          <div class="card-tools">
            
          </div>
          <a href="{{route("segmento.create")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nuevo Registro</a>
          <a href="{{route("Segmento.pdf")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> PDF </a>
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
                <th scope="col">Nombre segmento</th>
                <th scope="col">descripcion segmento</th>
                <th scope="col">Dashboard Nombre</th>
                <th scope="col">OPCIONES</th>
              </tr>
            </thead>
            <tbody>
                @if(count($segmento)<=0)
                <tr>
                  <td colspan="3">NO HAY REGISTROS</td>
                </tr>
                @else
                        @foreach ($segmento as $itemsegmento)
                      <tr>
                        <th scope="row">{{$itemsegmento->idsegmento}}</th>
                        <td>{{$itemsegmento->segmento_name}}</td>

                        <td>{{$itemsegmento->segmento_descripcion}}</td>
                        <td style="width: 100px;"><img style="width: 100%;" src="/{{$itemsegmento->dashboard->pdf}}" alt=""></td>
                        
                        
                        <td>  
                            <a href="{{route('segmento.edit',$itemsegmento->idsegmento)}}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Editar</a> 
                           
                     
                        
                           <a href="{{route('segmento.confirmar',$itemsegmento->idsegmento)}}" class="btn btn-danger btn-sm"> <i class="fas fa-edit"></i> Eliminar</a>
                        </td>
                        
                      </tr>
                      @endforeach
                @endif
            </tbody>
          </table>

          {{$segmento->links()}}
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div></div></div>
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