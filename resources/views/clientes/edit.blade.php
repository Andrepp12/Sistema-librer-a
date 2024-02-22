@extends('layouts.master')@section('titulo','CLIENTE')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    <div class="container">
        <h1>Editar Cliente</h1>
        <form method="POST" action="{{route('clientes.update',$cliente->Id_cliente)}}">
            @method('put')
            @csrf
            
            <div class="form-group">
                <label class="control-label">ID CLIENTE:</label>
                    <input type="text" id="Id_cliente" name="Id_cliente" value="{{$cliente->Id_cliente}}" disabled/>
            </div>

            <div class="form-group">
                <label class="control-label">Nombre cliente:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Nombres" name="Nombres" value="{{$cliente->Nombres}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Apellidos cliente:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Apellidos" name="Apellidos" value="{{$cliente->Apellidos}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">DNI cliente:</label>
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="DNI" name="DNI" value="{{$cliente->DNI}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">Fecha-Nacimiento cliente:</label>
                    <input type="date" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="FechaNacimiento" name="FechaNacimiento" value="{{$cliente->FechaNacimiento}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Edad cliente:</label>
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Edad" name="Edad" value="{{$cliente->Edad}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">Correo cliente:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Correo" name="Correo" value="{{$cliente->Correo}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>
            
            <div class="form-group">
                <label class="control-label">Celular cliente:</label>
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Celular" name="Celular" value="{{$cliente->Celular}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group" style="display: none;">
                <label class="control-label">Send Correo:</label>
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="sendCorreo" name="sendCorreo" value="{{$cliente->sendCorreo}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group" style="display: none;">
                <label class="control-label">Perfil:</label>
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="creaPerfil" name="creaPerfil" value="{{$cliente->creaPerfil}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">Notas cliente:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="Notas" name="Notas" value="{{$cliente->Notas}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

{{-- 
            <div class="form-group" >
                <label class="control-label">Segmento Perteneciente:</label>
               <select class="form-control" id="idsegmento" name="idsegmento">
                @foreach ($segmento as $itemsegmento)
                    <option value="{{$itemsegmento['idsegmento']}}"  {{$itemsegmento->idsegmento == $cliente->idsegmento ? 'selected' :''}}> {{$itemsegmento['segmento_name']}}</option>
                @endforeach
               </select>
                   
                   
            </div> --}}


                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div></div>
</div>
@endsection