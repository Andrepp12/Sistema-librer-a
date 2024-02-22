
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Préstamos</title>

</head>
<body style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif, Helvetica, sans-serif">
    <h1> BALANCE GENERAL </h1>
    <H1>Código: {{$balance->idBalance}}</H1>
    <div style="width: 100%; text-align: center">
        <div style="font-size: 40px">
            MES: @if($balance->mes == 1)
                    ENERO
                @elseif($balance->mes == 2)
                    FEBRERO
                @elseif($balance->mes == 3)
                    MARZO
                @elseif($balance->mes == 4)
                    ABRIL
                @elseif($balance->mes == 5)
                    MAYO
                @elseif($balance->mes == 6)
                    JUNIO
                @elseif($balance->mes == 7)
                    JULIO
                @elseif($balance->mes == 8)
                    AGOSTO
                @elseif($balance->mes == 9)
                    SEPTIEMBRE
                @elseif($balance->mes == 10)
                    OCTUBRE
                @elseif($balance->mes == 11)
                    NOVIEMBRE
                @elseif($balance->mes == 12)
                    DICIEMBRE
                @endif
        </div>

        <div style="font-size: 20px">
            Última Actualización
            {{$balance->dia}} - {{$balance->mes}} - {{$balance->ano}}
        </div>
    </div>
<br><br>
    <div>
        <table class="table table-sm"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 35%;"></th>
                    <th  style="width: 15%;"></th>
                    <th style="width: 35%;"></th>
                    <th  style="width: 15%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" style="text-align: center;"><label for="" style="font-style: bold">ACTIVO</label></td>
                    <td colspan="2" style="text-align: center;"><label for="" style="font-style: bold">PASIVO</label></td>
                </tr>
                <tr>
                    <td colspan="2" style="color: blue"><label for="" style="font-style: bold">Corriente</label></td>
                    <td colspan="2" style="color: blue"><label for="" style="font-style: bold">Corriente</label></td>
                </tr>
                <tr>
                    <td >Efectivo</td>
                    <td>{{$balance->efectivo}}</td>
                    <td >Obligaciones Tributarias</td>
                    <td>{{$balance->otributaria}}</td>
                </tr>
                <tr>
                    <td >Cuentas x Cobrar</td>
                    <td>{{$balance->cuentasxcobrar}}</td>
                    <td >Obligaciones Laborales</td>
                    <td>{{$balance->olaboral}}</td>
                </tr>
                <tr>
                    <td >Inventario</td>
                    <td>{{$balance->inventario}}</td>
                    <td style=" background-color:  rgb(194, 251, 255)">Total P.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance->tpc}}</td>
                </tr>
                <tr>
                    <td >Inversión</td>
                    <td>{{$balance->inversion}}</td>
                    <td colspan="2" style="color: blue" ><label for="" style="font-style: bold">No Corriente</label></td>
                </tr>
                <tr>
                    <td style=" background-color:  rgb(194, 251, 255)">Total A.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance->tac}}</td>
                    <td >Obligaciones Comerciales</td>
                    <td>{{$balance->ocomercial}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="color: blue" ><label for="" style="font-style: bold">No Corriente</label></td>
                    <td >Obligaciones a Largo Plazo</td>
                    <td>{{$balance->olargoplazo}}</td>
                </tr>
                <tr>
                    <td >Bono</td>
                    <td>{{$balance->bono}}</td>
                    <td style=" background-color: rgb(194, 251, 255)">Total P.N.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance->tpnc}}</td>
                </tr>
                <tr>
                    <td >Accion</td>
                    <td>{{$balance->accion}}</td>
                    <td style="background-color: rgb(194, 251, 255);">TOTAL PASIVO</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance->tpsvo}}</td>
                </tr>
                <tr>
                    <td >Letras x Cobrar</td>
                    <td>{{$balance->letrasxcobrar}}</td>
                    <td colspan="2" style="text-align: center;"><label for="" style="font-style: bold">PATRIMONIO</label></td>
                </tr>
                <tr>
                    <td >Enseres</td>
                    <td>{{$balance->enser}}</td>
                    <td >Capital</td>
                    <td>{{$balance->capital}}</td>
                </tr>
                <tr>
                    <td style="background-color: rgb(194, 251, 255);">Total A.N.C.</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance->tanc}}</td>
                    <td >Reservas</td>
                    <td>{{$balance->reserva}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="background-color: rgb(194, 251, 255);">TOTAL PATRIMONIO</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance->tptri}}</td>
                </tr><br>
                <tr>
                    <td style="text-align: center; background-color: rgb(151, 223, 228); font-style: bold">TOTAL ACTIVO</td>
                    <td style="background-color:  rgb(151, 223, 228); font-style: bold">{{$balance->ta}}</td>
                    <td style="text-align: center; background-color: rgb(151, 223, 228); font-style: bold">TOTAL PSVO. y PTRM.</td>
                    <td style="background-color:  rgb(151, 223, 228); font-style: bold">{{$balance->tpp}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    @php
        date_default_timezone_set("America/Lima");
        $date = date('Y-m-d');
        $d = date('d');
        $m = date('m');
        $a = date('Y');
    @endphp

    
    <div>
        <br><br>
        <h2 style="width: 100%;">Ratios</h2>
        <table class="table table-sm"  width="100%">
            <thead>
                <tr>
                    <th style="width: 35%;"></th>
                    <th  style="width: 15%;"></th>
                    <th style="width: 35%;"></th>
                    <th  style="width: 15%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="color: blue" ><label for="" style="font-style: bold">Ratio Corriente</label></td>
                    <td style="font-style: bold;"> {{$balance->tac / $balance->tpc}} </td>
                    <td style="color: blue" ><label for="" style="font-style: bold">Prueba Ácida</label></td>
                    <td style="font-style: bold;"> {{($balance->tac - $balance->inventario) / $balance->tpc}} </td>
                </tr>
                <tr>
                    <td style="color: blue" ><label for="" style="font-style: bold">Capital de Trabajo</label></td>
                    <td style="font-style: bold;"> S/. {{$balance->tac - $balance->tpc}} </td>
                    <td style="color: blue" ><label for="" style="font-style: bold">Ratio de Deuda</label></td>
                    <td style="font-style: bold;"> {{$balance->tpsvo / $balance->ta}}</td>
                </tr>
                <tr>
                    <td style="color: blue" ><label for="" style="font-style: bold">Patrimonio Activo</label></td>
                    <td style="font-style: bold;">{{$balance->tptri - $balance->ta}} </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- JS de BOOSTSTRAP -->


</body>
</html>
