<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Clientes - Mis Angelitos</title>
    <style>
        @page {
            size: landscape;
        }

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
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="title">Reporte de Clientes - Mis Angelitos</h1>
        <p class="description">El siguiente reporte muestra información detallada de los clientes de la librería Mis Angelitos.</p>
        <p>Fecha y hora del reporte: {{ now()->setTimezone('America/Lima')->format('d/m/Y H:i:s') }}</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">DNI</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Notas</th>
            </tr>
        </thead>
        <tbody>
            @if(count($clientes) <= 0)
            <tr>
                <td colspan="9">NO HAY REGISTROS</td>
            </tr>
            @else
            @foreach ($clientes as $itemcliente)
            <tr>
                <th scope="row">{{ $itemcliente->Id_cliente }}</th>
                <td>{{ $itemcliente->Nombres }}</td>
                <td>{{ $itemcliente->Apellidos }}</td>
                <td>{{ $itemcliente->DNI }}</td>
                <td>{{ $itemcliente->FechaNacimiento }}</td>
                <td>{{ $itemcliente->Edad }}</td>
                <td>{{ $itemcliente->Correo }}</td>
                <td>{{ $itemcliente->Celular }}</td>
                <td>{{ $itemcliente->Notas }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>
