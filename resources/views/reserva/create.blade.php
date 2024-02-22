@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <form action="{{route('reservar')}}" method="POST" name="f1">
                {{ csrf_field() }}
            <div class="col-md-6">
                <h2 class="header-title">Registrar Nueva Reserva</h2><br>
                <h3>Cliente</h3>
                <select name="idcliente" id="idcliente" class="form-control">
                    @if(count($recursos)<=0)
                        <option selected disabled>No hay registros</option>
                    @else
                        <option selected disabled>Seleccione un cliente</option>
                        @foreach ($clientes as $item)
                            <option value="{{$item->Id_cliente}}">{{$item->Id_cliente}} - {{$item->Nombres}} {{$item->Apellidos}} - {{$item->DNI}}</option>
                        @endforeach
                    @endif
                </select>
                <br>
            </div>
            <div class="col-md-6" align="right" style="align-items: end">
                <button class="btn btn-primary" class="tooltip-test">Generar</button>
                <a href="{{ route('cart.clearr') }}" style="color: white" class="btn btn-primary">Cancelar</a>
            </div>
            </form>
        </div>
        <br>
        <h3 class="header-title">Seleciones los Libros:</h2>
        <div id="camposInput1" style="" class="row">

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($recursos)<=0)
                       <tr>
                           <td colspan="8"><h4>No hay registros</h4></td>
                       </tr>
                       @else
                       @foreach ($recursos as $item)
                           <tr>
                           <td>{{$item->idRecurso}}</td>
                           <td>{{$item->titulo}}</td>
                           <td>{{$item->autor}}</td>
                           <td>{{$item->editorial}}</td>
                           <?php
                            $cart = \Cart::getContent();
                            $cantidad = 0;
                            foreach($cart as $dato){
                                if ($dato->id == $item->idRecurso) {
                                    $cantidad = $dato->quantity;
                                }
                            }
                            ?>
                           <td>{{$item->stock - $cantidad}}</td>
                           <td>{{$item->preciou}}</td>
                           <td>
                            <form action="{{route('cart.storer')}}" method="POST" name="f2">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->idRecurso }}" id="idrecurso" name="idrecurso">
                                <input type="hidden" value="{{ $item->titulo }}" id="titulo" name="titulo">
                                <input type="hidden" value="{{ $item->autor }}" id="autor" name="autor">
                                <input type="hidden" value="{{ $item->editorial }}" id="editorial" name="editorial">
                                <input type="hidden" value="{{ $item->preciou }}" id="preciou" name="preciou">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <input type="number" class="form-control form-control-sm col-md-4" value="1"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;" max="{{ $item->stock - $cantidad }}">
                                <button class="btn btn-primary  col-md-6" class="tooltip-test" title="add to cart"
                                @if ($item->stock == 0)
                                    disabled
                                @endif
                                >
                                    Agregar
                                </button>
                            </form>
                           </td>
                           </tr>
                       @endforeach
                       @endif
                     </tbody>
                  </table>

            </div>
        </div>
        <br>
        <br>
        <h3 class="header-title">Libros seleccionados:</h2>
        <div id="camposInput1" style="" class="row">

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Cantidad</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                       @if(count($cartCollection)<=0)
                       <tr>
                           <td colspan="8"><h4>No hay registros</h4></td>
                       </tr>
                       @else
                       @foreach($cartCollection as $item)
                           <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->attributes->autor}}</td>
                           <td>{{$item->attributes->editorial}}</td>
                           <td>{{$item->quantity}}</td>
                           <td>
                            <form action="{{ route('cart.remover') }}" method="POST" name="f3">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                            </form>
                           </td>
                           </tr>
                       @endforeach
                       @endif
                     </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
@endsection
