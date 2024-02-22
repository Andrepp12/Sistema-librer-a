@extends('layouts.master')@section('titulo','USUARIO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
    <h3>LISTADO DE USUARIO</h3>

    <div class="card">
        <div class="card-header">
          
    
          <div class="card-tools">
           
          </div>
          <a href="{{route("usuario.create")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Nuevo Registro</a>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <form class="form-inline my-2 my-lg-0" method="GET">
                <select class="form-control mr-sm-2" id="id_rol" name="id_rol">
                    @foreach ($roles as $itemsegmento)
                        <option value="{{ $itemsegmento['id_rol'] }}">{{ $itemsegmento['nom_rol'] }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
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
                <th scope="col">Nombre</th>
                <th scope="col">Usuario</th>
                <th scope="col">Rol</th>
                <th scope="col">OPCIONES</th>
              </tr>
            </thead>
            <tbody>
                @if(count($usuario)<=0)
                <tr>
                  <td colspan="3">NO HAY REGISTROS</td>
                </tr>
                @else
                @foreach ($usuario as $itemusuario)
                <tr>
                    <th scope="row">{{$itemusuario->id_usuario}}</th>
                    <td>{{$itemusuario->usuario}}</td>
                    <td>{{$itemusuario->nombre}}</td>
                    <td>{{$itemusuario->rolesModel->nom_rol}}</td>
                    <td>  
                        <a href="{{route('usuario.edit',$itemusuario->id_usuario)}}" class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Editar</a> 
                    </td>
                </tr>
            @endforeach
            
                @endif
            </tbody>
          </table>
 
          {{-- {{$usuario->links()}} --}}
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div> </div> </div>
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