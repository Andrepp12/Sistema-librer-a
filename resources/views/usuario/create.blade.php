@extends('layouts.master')@section('titulo','USUARIO')
@section('content')

<div class="page-wrapper">
  <div class="content container-fluid">
     

    <div class="container">
        <h1>Registro Nuevo</h1>
        <form method="POST" action="{{route('usuario.store')}}">
            @csrf
            
            <div class="form-group">
                <label class="control-label">Nombre :</label> 
                    <input type="text" class="form-control @error('nombreplato') is-invalid @enderror" 
                        placeholder="Ingrese nombre plato" id="usuario" name="usuario"  
                       
                        value="{{ $cliente ? $cliente->Nombres . ' ' . $cliente->Apellidos : '' }}"  />
                      
                    @error('nombreplato')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            @if($cliente)
            <div class="form-group" style="display: none">
                <label class="control-label">id_rol:</label>
               <select class="form-control @error('idcategoria') is-invalid  @enderror" id="id_rol" name="id_rol" >
                @foreach ($rol as $itemrol)
                    <option value="2"> {{$itemrol['nom_rol']}}</option>
                @endforeach
               </select>
               @error('idcategoria')
                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            @else
            <div class="form-group">
                <label class="control-label">id_rol:</label>
               <select class="form-control @error('idcategoria') is-invalid  @enderror" id="id_rol" name="id_rol" >
                @foreach ($rol as $itemrol)
                    <option value="{{$itemrol['id_rol']}}"> {{$itemrol['nom_rol']}}</option>
                @endforeach
               </select>
               @error('idcategoria')
                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div>
            @endif

             <div class="form-group">
                <label class="control-label">Usuario:</label> 
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese descripcion" id="nombre" name="nombre"
                        value="{{ $cliente ? $cliente->DNI: '' }}" 
                        />
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">Password:</label>
                    <input min="0" type="password" class="form-control @error('precio') is-invalid @enderror" 
                        placeholder="Ingrese precio" id="passsword" name="passsword"/>
                    @error('precio')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

           



            
                <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                {{-- <a href="{{route('cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a> --}}
            
        </form>
    </div>   </div>   </div>
@endsection