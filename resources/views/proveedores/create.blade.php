@extends('layouts.master')@section('titulo','USUARIO')
@section('content')

     

    <div class="container">
        <h1>Registro Nuevo</h1>
        <div class="page-wrapper">
            <div class="content container-fluid">
               
          
              <div class="container">
                  <h1>Registro Nuevo</h1>
                  <form method="POST" action="{{route('proveedores.store')}}">
                      @csrf
                      
                  
                      
          
                       <div class="form-group">
                          <label class="control-label">Correo:</label> 
                              <input type="text" class="form-control"
                                  placeholder="Ingrese descripcion" id="usuario" name="usuario"
                                  value="" 
                                  />
                       
                      </div>
          
                      <div class="form-group">
                          <label class="control-label">Password:</label>
                              <input min="0" type="password" class="form-control" 
                                  placeholder="Ingrese contraseña" id="passsword" name="passsword"/>
                            
                      </div>
          
                      <div class="form-group">
                          <label class="control-label">Nombre:</label>
                              <input min="0" type="text" class="form-control @error('precio') is-invalid @enderror" 
                                  placeholder="Ingrese precio" id="passsword" name="nombre"/>
                             
                      </div>
          
          
          
                      
                          <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i>
                              Grabar 
                          </button>
                          {{-- <a href="{{route('cancelar')}}" class="btn btn-danger" > <i class="fas fa-ban"></i>Cancelar</a> --}}
                      
                  </form>
              </div>   
            </div>   
        </div>
        
               
                     
          
          


@endsection