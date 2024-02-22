@extends('layouts.master')@section('titulo','USUARIO')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="container">
        <h1>Editar Segmento</h1>
        <form method="POST" action="{{route('usuario.update',$usuario->id_usuario)}}">
            @method('put')
            @csrf
             
            <div class="form-group">
                <label class="control-label">ID USUARIO:</label>
                    <input type="text" id="id_usuario" name="id_usuario" value="{{$usuario->id_usuario}}" disabled/>
            </div>

            <div class="form-group">
                <label class="control-label">Nombre usuario:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="usuario" name="usuario" value="{{$usuario->usuario}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Usuario:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="nombre" name="nombre" value="{{$usuario->nombre}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group" style="display: none;">
                <label class="control-label">PASSWORD:</label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                         id="passsword" name="passsword" value="{{$usuario->passsword}}"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

          

            <div class="form-group">
                <label class="control-label">Rol:</label>
               <select class="form-control" id="id_rol" name="id_rol">
                @foreach ($roles as $itemdashboard)
                    <option value="{{$itemdashboard['id_rol']}}"  {{$itemdashboard->id_rol == $usuario->id_rol ? 'selected' :''}}> {{$itemdashboard['nom_rol']}}"</option>
                @endforeach
               </select>
                  
                   
            </div>


                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('cancelarUSUARIO')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div>   </div>   </div>
@endsection