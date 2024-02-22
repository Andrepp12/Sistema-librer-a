@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")

@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <div class="container">
            <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">{{$a}}</h1>
            <h1>Registrar</h1>
            <form method="POST" action="{{route('planilla.store')}}">
                @csrf
    
                <div class="form-group row">
    
                    <input class="form-control" type="text" id="ano" name="ano" value="{{$a}}" style="visibility: collapse">
                    
                    <div class="col-6" style="margin-bottom: 30px">
                        <label style="margin-right:10px">Mes</label>
                        <select class="form-control selectpicker" name="mes" id="mes" required>
                            <option selected disabled>Seleccione una opcion</option>
                            <option value="01"> ENERO </option>
                            <option value="02"> FEBRERO </option>
                            <option value="03"> MARZO </option>
                            <option value="04"> ABRIL </option>
                            <option value="05"> MAYO </option>
                            <option value="06"> JUNIO </option>
                            <option value="07"> JULIO </option>
                            <option value="08"> AGOSTO </option>
                            <option value="09"> SEPTIEMBRE </option>
                            <option value="10"> OCTUBRE </option>
                            <option value="11"> NOVIEMBRE </option>
                            <option value="12"> DICIEMBRE </option>
                        </select>
                    </div>
    
                </div>
    
                <button class="btn btn-primary">
                    <i class="fa fa-save"></i>Activar
                </button>
    
                <a href="{{route('planilla.pindex',$a)}}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i>Atrás</a>
    
            </form>
        </div>
    
    </div>


@endsection