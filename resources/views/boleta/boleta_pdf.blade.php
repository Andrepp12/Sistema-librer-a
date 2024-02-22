<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta</title>

</head>
<body body style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif, Helvetica, sans-serif">
    <nav style="width: 100%; text-align: center">
        <h2>BOLETA Nro {{$venta->idVenta}}</h2>
    </nav>
    <br>
    <table class="row" style="width: 100%">
        <td class="col-6" style="width: 50%; text-align: center">
            CLIENTE: {{$venta->idCliente }}
        </td>
        <td class="col-6" style="width: 50%; text-align: center">
            FECHA: {{$venta->fecha}}
        </td>
    </table>
    <br>
    <?php
        $total = 0
    ?>
    <table class="table table-sm"  width="100%" cellspacing="0">
        <tr class="row" style="width: 100%">
            <th  style="width: 40%; text-align: left">
                Descripción
            </th>
            <th  style="width: 20%; text-align: center">
                Precio Unitario
            </th>
            <th  style="width: 20%; text-align: center">
                Cantidad
            </th>
            <th  style="width: 20%; text-align: right" >
                Sub Total
            </th>
        </tr>
    @foreach($cartCollection as $item)
                <tr class="row" style="width: 100%">
                    <td  style="width: 40%; text-align: left">
                        {{ $item->name }}
                    </td>
                    <td  style="width: 20%; text-align: center">
                        S/.{{ $item->price }}
                    </td>
                    <td  style="width: 20%; text-align: center">
                        {{ $item->quantity }}
                    </td>
                    <td  style="width: 20%; text-align: right" >
                        S/. {{ $item->price * $item->quantity }}
                    </td>
                </tr>
                <?php
                    $total = $total +($item->price * $item->quantity)
                ?>
            @endforeach
    </table>
        <br><hr style="width:100%;"><br>
    <table style="width: 100%">
        <td style="width: 50%"">
            <b>TOTAL :</b>
        </td>
        <td style="width: 50%; text-align: right">
           <b>S/.{{$total}}</b>
        </td>
    </table>
    <br>
    <table style="width: 100%">
        <td style="width: 35%"">
        </td>
        <td style="width: 30%; text-align: right">
            <img src="D:/xampp/htdocs/Proyecto_Libreria2/public/codigo_qr.jpg" style="width: 100%; text-align: center">
        </td>
        <td style="width: 35%"">
        </td>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
