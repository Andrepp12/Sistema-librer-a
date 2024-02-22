
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Préstamos</title>

</head>
<body style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif, Helvetica, sans-serif">
    <h1> BALANCE GENERAL</h1>

    <div style="width: 100%; text-align: center">
        <div style="font-size: 40px">
            ENERO - @if($balance->mes == 1)
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
                    <td>{{$balance2->efectivo}}</td>
                    <td >Obligaciones Tributarias</td>
                    <td>{{$balance2->otributaria}}</td>
                </tr>
                <tr>
                    <td >Cuentas x Cobrar</td>
                    <td>{{$balance2->cuentasxcobrar}}</td>
                    <td >Obligaciones Laborales</td>
                    <td>{{$balance2->olaboral}}</td>
                </tr>
                <tr>
                    <td >Inventario</td>
                    <td>{{$balance2->inventario}}</td>
                    <td style=" background-color:  rgb(194, 251, 255)">Total P.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance2->tpc}}</td>
                </tr>
                <tr>
                    <td >Inversión</td>
                    <td>{{$balance2->inversion}}</td>
                    <td colspan="2" style="color: blue" ><label for="" style="font-style: bold">No Corriente</label></td>
                </tr>
                <tr>
                    <td style=" background-color:  rgb(194, 251, 255)">Total A.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance2->tac}}</td>
                    <td >Obligaciones Comerciales</td>
                    <td>{{$balance2->ocomercial}}</td>
                </tr>
                <tr>
                    <td colspan="2" style="color: blue" ><label for="" style="font-style: bold">No Corriente</label></td>
                    <td >Obligaciones a Largo Plazo</td>
                    <td>{{$balance2->olargoplazo}}</td>
                </tr>
                <tr>
                    <td >Bono</td>
                    <td>{{$balance2->bono}}</td>
                    <td style=" background-color: rgb(194, 251, 255)">Total P.N.C.</td>
                    <td style="background-color: rgb(194, 251, 255);font-style: bold">{{$balance2->tpnc}}</td>
                </tr>
                <tr>
                    <td >Accion</td>
                    <td>{{$balance2->accion}}</td>
                    <td style="background-color: rgb(194, 251, 255);">TOTAL PASIVO</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance2->tpsvo}}</td>
                </tr>
                <tr>
                    <td >Letras x Cobrar</td>
                    <td>{{$balance2->letrasxcobrar}}</td>
                    <td colspan="2" style="text-align: center;"><label for="" style="font-style: bold">PATRIMONIO</label></td>
                </tr>
                <tr>
                    <td >Enseres</td>
                    <td>{{$balance2->enser}}</td>
                    <td >Capital</td>
                    <td>{{$balance2->capital}}</td>
                </tr>
                <tr>
                    <td style="background-color: rgb(194, 251, 255);">Total A.N.C.</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance2->tanc}}</td>
                    <td >Reservas</td>
                    <td>{{$balance2->reserva}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="background-color: rgb(194, 251, 255);">TOTAL PATRIMONIO</td>
                    <td style="background-color:  rgb(194, 251, 255); font-style: bold">{{$balance2->tptri}}</td>
                </tr><br>
                <tr>
                    <td style="text-align: center; background-color: rgb(151, 223, 228); font-style: bold">TOTAL ACTIVO</td>
                    <td style="background-color:  rgb(151, 223, 228); font-style: bold">{{$balance2->ta}}</td>
                    <td style="text-align: center; background-color: rgb(151, 223, 228); font-style: bold">TOTAL PSVO. y PTRM.</td>
                    <td style="background-color:  rgb(151, 223, 228); font-style: bold">{{$balance2->tpp}}</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
</html>
