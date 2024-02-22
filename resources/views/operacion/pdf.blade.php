<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Compras Realizada A Los Proveedores</title>
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
        <h1 class="title">Reporte de Segmentación a Clientes</h1>
        <p class="description">El siguiente reporte muestra información sobre las compras.</p>
        <p>Fecha y hora del reporte: {{ now()->setTimezone('America/Lima')->format('d/m/Y H:i:s') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Recursos Comprados</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Subtotal</th>
                <th scope="col">IGV</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @if(count($operacion) <= 0)
            <tr>
                <td colspan="5">NO HAY REGISTROS</td>
            </tr>
            @else
            @foreach ($operacion as $itemsegmento)
            <tr>
                <th scope="row">{{ $itemsegmento->idoperacion }}</th>
                <td>{{ $itemsegmento->descripcion}}</td>
                @foreach ($usuario as $itemC)
                @if ($itemC->id_usuario ==  $itemsegmento->id_usuario)
                    <td>
                        {{$itemC->nombre}}
                    </td>

                @endif
                @endforeach
                <td>S/.{{ $itemsegmento->subtotal}}</td>
                <td>S/.{{ $itemsegmento->igv}}</td>
                <td>S/.{{ $itemsegmento->total}}</td>
                
                
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
