@extends('layouts.master')@section('titulo','PUBLICIDAD')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     


<div class="container">
  <div class="row">
      <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <form class="form-inline my-2 my-lg-0" method="GET">
                  <select class="form-control mr-sm-2" id="idsegmento" name="idsegmento">
                      @foreach ($segmento as $itemsegmento)
                          <option value="{{ $itemsegmento['idsegmento'] }}">{{ $itemsegmento['segmento_name'] }}</option>
                      @endforeach
                  </select>
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
          </nav>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col">
          <h3>LISTADO DE CLIENTES</h3>
      </div>
  </div>
  <div class="row mt-3">
      <div class="col">
          @if (session('datos'))
              <div id="mensaje">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      {{ session('datos') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
          @endif
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
              </div>
              <div class="card-body">
                  <div class="table-responsive">
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
                              @if (count($cliente) <= 0)
                                  <tr>
                                      <td colspan="10">NO HAY REGISTROS</td>
                                  </tr>
                              @else
                                  @foreach ($cliente as $itemcliente)
                                      <tr>
                                          <th scope="row">{{ $itemcliente->Id_cliente }}</th>
                                          <td>{{ $itemcliente->Nombres }}</td>
                                          <td>{{ $itemcliente->Apellidos }}</td>
                                          <td>{{ $itemcliente->DNI }}</td>
                                          <td>{{ $itemcliente->FechaNacimiento }}</td>
                                          <td>{{ $itemcliente->Edad }}</td>
                                          <td>{{ $itemcliente->Correo }}</td>
                                          <td>{{ $itemcliente->Celular }}</td>
                                          <td>{{ $itemcliente->Notas }}</td>
                                          {{-- <td>
                                              <a href="{{ route('clientes.confirmar', $itemcliente->Id_cliente) }}"
                                                  class="btn btn-info btn-sm"> <i class="fas fa-edit"></i> Enviar </a>
                                          </td> --}}
                                          <td>
                                            <a href="{{ route('enviaCorreoSegmento', [$itemcliente->Correo, $itemcliente->idsegmento]) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-edit"></i> Send publicidad
                                              </a>
                                              
                                          </td>
                                          
                                      </tr>
                                  @endforeach
                              @endif
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="card-footer">
                  Footer
              </div>
          </div>
      </div>
  </div>
</div>
</div></div>

<script>
  function bloquearBoton(boton) {
      boton.disabled = true;
  }

  setTimeout(function() {
      document.querySelector('#mensaje').remove();
  }, 2000);
</script>

@endsection