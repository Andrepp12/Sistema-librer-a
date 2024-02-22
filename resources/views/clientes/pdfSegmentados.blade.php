<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Segmentos de Clientes - Mis Angelitos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background-color: #f2f2f2;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #e9e9e9;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Reporte de Segmentos de Clientes</h1>
    <p>Librería Mis Angelitos</p>
    
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
            <th scope="col">Segmento</th>
          </tr>
        </thead>
        <tbody>
            @if(count($cliente)<=0)
            <tr>
              <td colspan="8">NO HAY REGISTROS</td>
            </tr>
            @else
                @foreach ($cliente as $itemcliente)
                  <tr>
                    <th scope="row">{{$itemcliente->Id_cliente}}</th>
                    <td>{{$itemcliente->Nombres}}</td>
                    <td>{{$itemcliente->Apellidos}}</td>
                    <td>{{$itemcliente->DNI}}</td>
                    <td>{{$itemcliente->FechaNacimiento}}</td>
                    <td>{{$itemcliente->Edad}}</td>
                    <td>{{$itemcliente->Correo}}</td>
                    <td>{{$itemcliente->Segmento->segmento_name}}</td>
                  </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <p>Fecha y hora del reporte: {{ now()->setTimezone('America/Lima')->format('d/m/Y H:i:s') }}</p>
</body>
</html>
