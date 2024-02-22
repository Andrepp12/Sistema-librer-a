<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Devoluciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f5f5f5;
        }

        .image-column {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">Reporte de Devolucion</h1>
        <p class="description">El siguiente reporte muestra información sobre las devoluciones.</p>
        <p>Fecha y hora del reporte: {{ now()->setTimezone('America/Lima')->format('d/m/Y H:i:s') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Fecha</th>
                <th scope="col">Motivo</th>
                
            </tr>
        </thead>
        <tbody>
            @if(count($devoluciong) <= 0)
            <tr>
                <td colspan="5">NO HAY REGISTROS</td>
            </tr>
            @else
            @foreach ($devoluciong as $item)
            <tr>
                <tr>
                    <td>{{$item->idDevolucion_G}}</td>
                <td> 
                    @foreach ($proveedor as $itemC)
                    @if ($itemC->id_usuario == $item->id_usuario)
                      
                            {{$itemC->nombre}}
                        

                    @endif
                    @endforeach</td>
                <td>{{$item->fechag}}</td>
                <td>{{$item->motivo}}</td>
                
                
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
