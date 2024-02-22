@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-12 d-flex align-items-center"  style="display: flex; justify-content: right">
                <a href="" class="btn btn-primary mb-0" style="margin-right: 15px">PDF</a>
                <a href="" class="btn btn-primary mb-0">Volver</a>
            </div>
        </div>
        <div class="p-6  border-b border-gray-200" >
            <nav aria-label="breadcrumb" style="display: flex; justify-content: center">
                <h2>BOLETA Nro {{$operacion->idoperacion}}</h2>
            </nav>
            <br>
            <div class="row">
                <div class="col-6">
                    PROVEEDOR :{{$operacion->id_usuario}}
                    
 
                </div>
                <div class="col-6">
                    FECHA: {{$operacion->fecha}}
                </div>
            </div>
            <br>
            <?php
                $total = 0
            ?>
            @foreach($cartCollection as $item)
                        <div class="row">
                           <div class="row">
                            <div class="col-12">
                                {{ $item->name }}
                            </div>
                            <div class="col-12">
                                Precio: S/.{{ $item->price }}  /  Cantidad: {{ $item->quantity }} / Sub Total: S/. {{ $item->price * $item->quantity }} / IGV: S/. {{ $item->price * $item->quantity * 0.18}}
                            </div>
                           
                        </div>
                        <?php
                            $total = $total +(($item->price * $item->quantity * 0.18)+($item->price * $item->quantity))
                        ?>
                    @endforeach
                <br><br>
            <div class="row">
                <div class="col-6">
                    <b>TOTAL :</b>
                </div>
                <div class="col-6" style="display: flex; justify-content: right">
                   <b>S/.{{$total}}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
