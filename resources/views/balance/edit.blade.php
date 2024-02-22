@extends('layouts.master')

@section("titulo","FINANZAS FLUJOS")

@section('content')
    <div class="page-wrapper">
        <div class="container" style="margin-top: 100px">
            <h1>Editar Balance</h1>
    
            <a href="{{route('balance.pindex',$balance->ano)}}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>Atrás</a>
    
                
            <form method="POST" action="{{route('balance.update',$balance->idBalance)}}">
                @method('put')
                @csrf
    
                @php
                    date_default_timezone_set("America/Lima");
                    $date = date('Y-m-d');
                    $d = date('d');
                    $m = date('m');
                    $a = date('Y');
                @endphp
    
                <div class="form-group row">
    
                    <div class="col-md-12" style="margin-bottom: 30px">
                        <label for="inputPassword4" class="form-label">Fecha</label>
                        <input type="text" class="form-control" name="fecha" id="fecha" value="{{$date}}" disabled>
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
                                <input type="text" name="efectivo" id="efectivo" value="{{$balance->efectivo}}">
                                <input type="text"  name="cuentasxcobrar" id="cuentasxcobrar" value="{{$balance->cuentasxcobrar}}">
                                <input type="text"  name="inventario" id="inventario" value="{{$balance->inventario}}">
                                <input type="text"  name="inversion" id="inversion" value="{{$balance->inversion}}">
                            </div>
    
                            <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                                <label style="color: green;">TOTAL A.C.</label>
                            </div>
                            <div class="col-6" style="margin-top: 7px;">
                                <input type="text"  name="TAC" id="TAC" disabled value="{{$balance->tac}}">
                                <input type="text"  name="TAC2" id="TAC2" style="visibility: collapse" value="{{$balance->tac}}">
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
                                <input type="text"  name="bono" id="bono" value="{{$balance->bono}}">
                                <input type="text"  name="accion" id="accion" value="{{$balance->accion}}">
                                <input type="text"  name="letrasxcobrar" id="letrasxcobrar" value="{{$balance->letrasxcobrar}}">
                                <input type="text"  name="enser" id="enser" value="{{$balance->enser}}">
                            </div>
    
                            <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                                <label style="color: green;">TOTAL A.N.C.</label>
                            </div>
                            <div class="col-6" style="margin-top: 7px;">
                                <input type="text"  name="TANC" id="TANC" disabled value="{{$balance->tanc}}">
                                <input type="text"  name="TANC2" id="TANC2" style="visibility: collapse" value="{{$balance->tanc}}">
                            </div>
    
                            <div class="col-6" style="margin-top: 110px; padding-left: 170px; padding-top: 20px;padding-bottom: 20px; background-color:rgb(243, 152, 41)">
                                <label style="color: green;">TOTAL ACTIVO</label>
                            </div>
                            <div class="col-6" style="margin-top: 110px; padding-top: 20px; background-color:rgb(243, 152, 41)">
                                <input type="text"  name="TA" id="TA" disabled value="{{$balance->ta}}">
                                <input type="text"  name="TA2" id="TA2" style="visibility: collapse" value="{{$balance->ta}}">
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
                                <input type="text" name="otributaria" id="otributaria" value="{{$balance->otributaria}}">
                                <input type="text"  name="olaboral" id="olaboral" value="{{$balance->olaboral}}">
                            </div>
    
                            <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                                <label style="color: red;">TOTAL P.C.</label>
                            </div>
                            <div class="col-6" style="margin-top: 7px;">
                                <input type="text"  name="TPC" id="TPC" disabled value="{{$balance->tpc}}">
                                <input type="text"  name="TPC2" id="TPC2" style="visibility: collapse" value="{{$balance->tpc}}">
                            </div>
    
                        </div>
    
                        <h2 style="display: flex; justify-content: center">No Corriente</h2>
                        <div class="row">
                            <div class="col-6" style="padding-left: 90px">
                                <label>Obligaciones Comerciales</label><br>
                                <label>Obligaciones a Largo Plazo</label>
                            </div>
                            <div class="col-6">
                                <input type="text"  name="ocomercial" id="ocomercial" value="{{$balance->ocomercial}}">
                                <input type="text"  name="olargoplazo" id="olargoplazo" value="{{$balance->olargoplazo}}">
                            </div>
    
                            <div class="col-6" style="display: flex; justify-content: end; margin-top: 7px; padding-left: 170px;">
                                <label style="color: red;">TOTAL P.N.C.</label>
                            </div>
                            <div class="col-6" style="margin-top: 7px;">
                                <input type="text"  name="TPNC" id="TPNC" disabled value="{{$balance->tpnc}}">
                                <input type="text"  name="TPNC2" id="TPNC2" style="visibility: collapse" value="{{$balance->tpnc}}">
                            </div>
    
                            <div class="col-6" style="padding-left: 170px;background-color: bisque">
                                <label style="color: red;">TOTAL PASIVO</label>
                            </div>
                            <div class="col-6" style=" background-color: bisque">
                                <input type="text"  name="TP" id="TP" disabled value="{{$balance->tpsvo}}">
                                <input type="text"  name="TP2" id="TP2" style="visibility: collapse" value="{{$balance->tpsvo}}">
                            </div>
                        </div>
    
                        
                        <h2 style="color: rgb(255, 136, 0); display: flex; justify-content: center">PATRIMONIO</h2>
                        <div class="row">
                            <div class="col-6" style="padding-left: 200px">
                                <label>Capital</label><br>
                                <label>Reservas</label>
                            </div>
                            <div class="col-6">
                                <input type="text"  name="capital" id="capital" value="{{$balance->capital}}">
                                <input type="text"  name="reserva" id="reserva" value="{{$balance->reserva}}">
                            </div>
    
                            <div class="col-6" style="padding-left: 150px;background-color: bisque">
                                <label style="color: rgb(255, 136, 0);">TOTAL PATRIMONIO</label>
                            </div>
                            <div class="col-6" style=" background-color: bisque">
                                <input type="text"  name="TPTR" id="TPTR" disabled value="{{$balance->tptri}}">
                                <input type="text"  name="TPTR2" id="TPTR2" style="visibility: collapse" value="{{$balance->tptri}}">
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
    
    
    
    
    
    
                    <input class="form-control" type="text" id="ano" value="{{$a}}" name="ano" style="visibility: collapse">
    
                    <input class="form-control" type="text" id="mes" value="{{$m}}" name="mes" style="visibility: collapse">
        
                    <input class="form-control" type="text" id="dia" value="{{$d}}" name="dia" style="visibility: collapse">
                    
                </div>
    
                <br><br>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Grabar</button>
                {{-- <a href="{{route('cancelar.flujo_dinero')}}" class="btn btn-danger"><i class="fas fa-ban"></i>Cancelar</a> --}}
            </form>
    
        </div>
    </div>

    @push("scripts")
        <script>
            $(document).ready(function(){
                $('#efectivo').keyup(function(){
                    calcula();
                });
                $('#cuentasxcobrar').keyup(function(){
                    calcula();
                });
                $('#inventario').keyup(function(){
                    calcula();
                });
                $('#inversion').keyup(function(){
                    calcula();
                });
                $('#bono').keyup(function(){
                    calcula();
                });
                $('#accion').keyup(function(){
                    calcula();
                });
                $('#letrasxcobrar').keyup(function(){
                    calcula();
                });
                $('#enser').keyup(function(){
                    calcula();
                });

                //-----------------------------

                $('#otributaria').keyup(function(){
                    calcula2();
                });
                $('#olaboral').keyup(function(){
                    calcula2();
                });

                $('#ocomercial').keyup(function(){
                    calcula2();
                });
                $('#olargoplazo').keyup(function(){
                    calcula2();
                });

                //-----------------------------

                $('#capital').keyup(function(){
                    calcula2();
                });
                $('#reserva').keyup(function(){
                    calcula2();
                });
            });


            function calcula(){
                efectivo = document.getElementById('efectivo').value;
                cuentasxcobrar = document.getElementById('cuentasxcobrar').value;
                inventario = document.getElementById('inventario').value;
                inversion = document.getElementById('inversion').value;

                document.getElementById('TAC').value = parseInt(efectivo) + parseInt(cuentasxcobrar) + parseInt(inventario) + parseInt(inversion);
                document.getElementById('TAC2').value = parseInt(efectivo) + parseInt(cuentasxcobrar) + parseInt(inventario) + parseInt(inversion);

                bono = document.getElementById('bono').value;
                accion = document.getElementById('accion').value;
                letrasxcobrar = document.getElementById('letrasxcobrar').value;
                enser = document.getElementById('enser').value;

                document.getElementById('TANC').value = parseInt(bono) + parseInt(accion) + parseInt(letrasxcobrar) + parseInt(enser);
                document.getElementById('TANC2').value = parseInt(bono) + parseInt(accion) + parseInt(letrasxcobrar) + parseInt(enser);

                tac = document.getElementById('TAC').value;
                tanc = document.getElementById('TANC').value;
                document.getElementById('TA').value = parseInt(tac) + parseInt(tanc);
                document.getElementById('TA2').value = parseInt(tac) + parseInt(tanc);
            }

            function calcula2(){
                otributaria = document.getElementById('otributaria').value;
                olaboral = document.getElementById('olaboral').value;
                ocomercial = document.getElementById('ocomercial').value;
                olargoplazo = document.getElementById('olargoplazo').value;

                document.getElementById('TPC').value = parseInt(otributaria) + parseInt(olaboral);
                document.getElementById('TPC2').value = parseInt(otributaria) + parseInt(olaboral);
                document.getElementById('TPNC').value = parseInt(ocomercial) + parseInt(olargoplazo);
                document.getElementById('TPNC2').value = parseInt(ocomercial) + parseInt(olargoplazo);

                tpc = document.getElementById('TPC').value;
                tpnc = document.getElementById('TPNC').value;
                document.getElementById('TP').value = parseInt(tpc) + parseInt(tpnc);
                document.getElementById('TP2').value = parseInt(tpc) + parseInt(tpnc);

                capital = document.getElementById('capital').value;
                reserva = document.getElementById('reserva').value;

                document.getElementById('TPTR').value = parseInt(capital) + parseInt(reserva);
                document.getElementById('TPTR2').value = parseInt(capital) + parseInt(reserva);

                tpasivo = document.getElementById('TP').value;
                tt = document.getElementById('TPTR').value;

                document.getElementById('TPYP').value = parseInt(tpasivo) + parseInt(tt);
                document.getElementById('TPYP2').value = parseInt(tpasivo) + parseInt(tt);
            }
        </script>
    @endpush

@endsection