@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")

@section('content')
    <div class="page-wrapper">
        <div class="container" style="margin-top: 100px">
            <h1>Visualizar Balance</h1>
    
            <a href="{{route('balance.pindex',$balance->ano)}}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>Atrás</a>
                
            <div class="form-group row">
    
                <div class="col-md-12" style="margin-bottom: 30px">
                    <h3>Fecha última Actualización (d-m-a)</h3>
                    <input type="text" class="form-control" name="fecha" id="fecha" value="{{$balance->dia}} - {{$balance->mes}} - {{$balance->ano}}" disabled>
                </div>
    
    
                <div class="col-md-6">
                    <h2 style="color: green; display: flex; justify-content: center">ACTIVO</h2>
                    <h2 style="display: flex; justify-content: center">Corriente</h2>
                    <div class="row">
                        <div class="col-6" style="padding-left: 170px">
                            <label>Efectivo</label><br>
                            <label>Cuentas x Cobrar</label><br>
                            <label>Inventario</label><br>
                            <label>Inversion</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="efectivo" id="efectivo" disabled value="{{$balance->efectivo}}">
                            <input type="text"  name="cuentasxcobrar" id="cuentasxcobrar" disabled value="{{$balance->cuentasxcobrar}}">
                            <input type="text"  name="inventario" id="inventario" disabled value="{{$balance->inventario}}">
                            <input type="text"  name="inversion" id="inversion" disabled  value="{{$balance->inversion}}">
                        </div>
    
                        <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                            <label style="color: green;">TOTAL A.C.</label>
                        </div>
                        <div class="col-6" style="margin-top: 7px;">
                            <input type="text"  name="TAC" id="TAC" disabled value="{{$balance->tac}}">
                        </div>
    
                    </div>
    
                    <h2 style="display: flex; justify-content: center">No Corriente</h2>
                    <div class="row">
                        <div class="col-6" style="padding-left: 170px">
                            <label>Bono</label><br>
                            <label>Accion</label><br>
                            <label>Letras x Cobrar</label><br>
                            <label>Enseres</label>
                        </div>
                        <div class="col-6">
                            <input type="text"  name="bono" id="bono" disabled value="{{$balance->bono}}">
                            <input type="text"  name="accion" id="accion" disabled value="{{$balance->accion}}">
                            <input type="text"  name="letrasxcobrar" id="letrasxcobrar" disabled value="{{$balance->letrasxcobrar}}">
                            <input type="text"  name="enser" id="enser" disabled value="{{$balance->enser}}">
                        </div>
    
                        <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                            <label style="color: green;">TOTAL A.N.C.</label>
                        </div>
                        <div class="col-6" style="margin-top: 7px;">
                            <input type="text"  name="TANC" id="TANC" disabled value="{{$balance->tanc}}">
                        </div>
    
                        <div class="col-6" style="margin-top: 53px; padding-left: 170px; padding-top: 20px; padding-bottom: 28px; background-color:rgb(243, 152, 41)">
                            <label style="color: green;">TOTAL ACTIVO</label>
                        </div>
                        <div class="col-6" style="margin-top: 53px; padding-top: 20px; background-color:rgb(243, 152, 41)">
                            <input type="text"  name="TA" id="TA" disabled value="{{$balance->ta}}">
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <h2 style="color: red; display: flex; justify-content: center">PASIVO</h2>
                    <h2 style="display: flex; justify-content: center">Corriente</h2>
                    <div class="row">
                        <div class="col-6" style="padding-left: 130px">
                            <label>Obligaciones Tributarias</label><br>
                            <label>Obligaciones Laboroales</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="otributaria" id="otributaria" disabled value="{{$balance->otributaria}}">
                            <input type="text"  name="olaboral" id="olaboral" disabled value="{{$balance->olaboral}}">
                        </div>
    
                        <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                            <label style="color: red;">TOTAL P.C.</label>
                        </div>
                        <div class="col-6" style="margin-top: 7px;">
                            <input type="text"  name="TPC" id="TPC" disabled value="{{$balance->tpc}}">
                        </div>
    
                    </div>
    
                    <h2 style="display: flex; justify-content: center">No Corriente</h2>
                    <div class="row">
                        <div class="col-6" style="padding-left: 90px">
                            <label>Obligaciones Comerciales</label><br>
                            <label>Obligaciones a Largo Plazo</label>
                        </div>
                        <div class="col-6">
                            <input type="text"  name="ocomercial" id="ocomercial" disabled value="{{$balance->ocomercial}}">
                            <input type="text"  name="olargoplazo" id="olargoplazo" disabled value="{{$balance->olargoplazo}}">
                        </div>
    
                        <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                            <label style="color: red;">TOTAL P.N.C.</label>
                        </div>
                        <div class="col-6" style="margin-top: 7px;">
                            <input type="text"  name="TPNC" id="TPNC" disabled value="{{$balance->tpnc}}">
                        </div>
    
                        <div class="col-6" style="padding-left: 170px;background-color: bisque">
                            <label style="color: red;">TOTAL PASIVO</label>
                        </div>
                        <div class="col-6" style=" background-color: bisque">
                            <input type="text"  name="TP" id="TP" disabled value="{{$balance->tpsvo}}">
                        </div>
                    </div>
    
                    
                    <h2 style="color: rgb(255, 136, 0); display: flex; justify-content: center">PATRIMONIO</h2>
                    <div class="row">
                        <div class="col-6" style="padding-left: 200px">
                            <label>Capital</label><br>
                            <label>Reservas</label>
                        </div>
                        <div class="col-6">
                            <input type="text"  name="capital" id="capital" disabled value="{{$balance->capital}}">
                            <input type="text"  name="reserva" id="reserva" disabled value="{{$balance->reserva}}">
                        </div>
    
                        <div class="col-6" style="padding-left: 150px;background-color: bisque">
                            <label style="color: rgb(255, 136, 0);">TOTAL PATRIMONIO</label>
                        </div>
                        <div class="col-6" style=" background-color: bisque">
                            <input type="text"  name="TPTR" id="TPTR" disabled value="{{$balance->tptri}}">
                        </div>
    
                        <div class="col-6" style="margin-top: 7px; padding-left: 170px; padding-top: 20px;padding-bottom: 20px; background-color: rgb(243, 152, 41)">
                            <label style="color: rgb(182, 42, 0);">TOTAL PSV. y PTR.</label>
                        </div>
                        <div class="col-6" style="margin-top: 7px; padding-top: 20px; background-color: rgb(243, 152, 41)">
                            <input type="text"  name="TPYP" id="TPYP" disabled value="{{$balance->tpp}}">
                            <input type="text"  name="TPYP2" id="TPYP2" style="visibility: collapse" value="{{$balance->tpp}}">
                        </div>
                    </div>
                </div>
    
                
            </div>
    
        </div>        
    </div>


@endsection