@extends('layouts.master')@section('titulo','CLIENTE')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="container">
        <h1>Registro Nuevo</h1>
        <form method="POST" action="{{route('clientes.store')}}">
            @csrf
            
            <div class="form-group">
                <label class="control-label">Nombre Cliente:</label> 
                    <input type="text" class="form-control @error('nombreplato') is-invalid @enderror" 
                        placeholder="Ingrese nombre cliente" id="Nombres" name="Nombres" />
                    @error('nombreplato')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            {{-- <div class="form-group">
                <label class="control-label">CATEGORIA:</label>
               <select class="form-control @error('idcategoria') is-invalid  @enderror" id="idcategoria" name="idcategoria" >
                @foreach ($categoria as $itemcategoria)
                    <option value="{{$itemcategoria['idcategoria']}}"> {{$itemcategoria['categoria']}}</option>
                @endforeach
               </select>
               @error('idcategoria')
                    <span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span>
                @enderror
            </div> --}}

            <div class="form-group">
                <label class="control-label">Apellidos:</label>
                    <input min="0" type="text" class="form-control @error('precio') is-invalid @enderror" 
                        placeholder="Ingrese apellidos" id="Apellidos" name="Apellidos"/>
                    @error('precio')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>

            <div class="form-group">
                <label class="control-label">DNI:</label> 
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese DNI" id="DNI" name="DNI"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">FechaNacimiento:</label> 
                    <input type="date" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese Fecha Nacimiento" id="FechaNacimiento" name="FechaNacimiento"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Edad:</label> 
                    <input type="number" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese edad" id="Edad" name="Edad"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Correo:</label> 
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese correo" id="Correo" name="Correo"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>
 

            <div class="form-group">
                <label class="control-label">Celular:</label> 
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese celular" id="Celular" name="Celular"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            <div class="form-group">
                <label class="control-label">Notas:</label> 
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" 
                        placeholder="Ingrese notas" id="Notas" name="Notas"/>
                    @error('descripcion')

                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>


            
                <button  type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                    Grabar 
                </button>
                <a href="{{route('cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a>
            
        </form>
    </div></div>
</div>
@endsection