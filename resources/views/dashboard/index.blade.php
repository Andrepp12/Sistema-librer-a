@extends('layouts.master')@section('titulo','DASHBOARD')
@section('content')

<!-- Estilos de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<div class="page-wrapper">
  <div class="content container-fluid">

    <div class="card-header">
      <h3 class="card-title">Dashboard</h3>
      <div class="card-tools">
       
      </div>
    </div>

    <div class="card-body" style="padding: 0px">
      <nav class="navbar navbar-light float-left" style="width: 100%">
        <a href="{{route("dashboard.create")}}" class="btn btn-primary">
          <i class="fa fa-user"></i> Nuevo Dashboard
        </a>
       
       
      </nav>

      @if (session('datos'))
        <div id="mensaje">
          <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      @endif

      <div class="row">
        @foreach ($dashboard as $itemdashboard)
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <img src="/{{$itemdashboard->pdf}}" style="align-content: center" width="100%" alt="">
                {{-- <h5 class="card-title"> <b>{{$itemplato->nombreplato}}</b> </h5>
                <p class="card-text">{{$itemplato->descripcion}}</p>
                <p class="card-text">S/.{{$itemplato->precio}}</p> --}}
                <div>
                  <a href="{{route('dashboard.edit',$itemdashboard->idDasbhboard)}}" class="btn btn-info btn-sm">
                    <i class="fas fa-edit"></i> Editar
                  </a>
                  <a href="{{route('dashboard.confirmar',$itemdashboard->idDasbhboard)}}" class="btn btn-danger btn-sm">
                    <i class="fas fa-edit"></i> Eliminar
                  </a>
                  
                  
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      {{$dashboard->links()}}

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