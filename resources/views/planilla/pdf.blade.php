
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Préstamos</title>

</head>
<body style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif, Helvetica, sans-serif">
    <h1> PLANILLA </h1>
    <H1>Código: {{$planilla->idPlanilla}}</H1>
    <div style="width: 100%; text-align: center">
        <div style="font-size: 40px">
            MES: @if($planilla->mes == 1)
                    ENERO
                @elseif($planilla->mes == 2)
                    FEBRERO
                @elseif($planilla->mes == 3)
                    MARZO
                @elseif($planilla->mes == 4)
                    ABRIL
                @elseif($planilla->mes == 5)
                    MAYO
                @elseif($planilla->mes == 6)
                    JUNIO
                @elseif($planilla->mes == 7)
                    JULIO
                @elseif($planilla->mes == 8)
                    AGOSTO
                @elseif($planilla->mes == 9)
                    SEPTIEMBRE
                @elseif($planilla->mes == 10)
                    OCTUBRE
                @elseif($planilla->mes == 11)
                    NOVIEMBRE
                @elseif($planilla->mes == 12)
                    DICIEMBRE
                @endif
            - AÑO: {{$planilla->ano}}
        </div>
    </div>
<br><br>
    <div>
        <table class="table table-sm"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 35%; background-color: black; color: white; text-align: cente">Trabajador</th>
                    <th  style="width: 15%; background-color: black; color: white; text-align: cente">Sueldo</th>
                    <th style="width: 35%; background-color: black; color: white; text-align: cente">Descuento</th>
                    <th style="width: 35%; background-color: black; color: white; text-align: cente">Bonificacion</th>
                    <th  style="width: 15%; background-color: black; color: white; text-align: center">Desembolso</th>
                </tr>
            </thead>
            <br>
            <tbody>
                @foreach ($detalles as $item)
                <tr>
                    <td>{{$item->nombreT}}</td>
                    <td style="text-align: center">{{$item->sueldo}}</td>
                    <td style="text-align: center">{{$item->descuento}}</td>
                    <td style="text-align: center">{{$item->bonificacion}}</td>
                    <td style="text-align: center">{{$item->desembolso}}</td>
                </tr>
                <br><br>
            @endforeach
            </tbody>
        </table>
    </div>




</body>
</html>
