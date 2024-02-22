@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div>
            <h2 class="header-title">Registrar Nueva Devolución</h2><br>
            <form action="{{ route('devolver') }}" method="POST" name="f1" >
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-4">
                        <h3>Venta</h3>
                        <input type="number" min="1" name="idventa" id="idventa" disabled value="{{$venta->idVenta}}">
                        <input type="hidden" value="{{$venta->idVenta}}" id="idventa" name="idventa">
                    </div>
                    <div class="col-4">
                        <h3>Razon</h3>
                        <input type="text" name="razon" id="razon" style="width: 80%">
                    </div>
                    <div class="col-4">
                        <br>
                        <button class="btn btn-primary" class="tooltip-test">Generar</button>
                        <a href="{{ route('cart.cleard') }}" style="color: white" class="btn btn-primary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
            <br>
        <h3 class="header-title">Seleciones los Libros:</h2>
        <div  style="" class="row">
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
                           <td>{{$item->cantidad - $cantidad}}</td>
                           <td>
                            <form action="{{route('cart.stored')}}" method="POST" name="f2">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->idRecurso }}" id="idrecurso" name="idrecurso">
                                <input type="hidden" value="{{ $item->titulo }}" id="titulo" name="titulo">
                                <input type="hidden" value="{{ $item->autor }}" id="autor" name="autor">
                                <input type="hidden" value="{{ $item->editorial }}" id="editorial" name="editorial">
                                <input type="hidden" value="{{ $item->preciou }}" id="preciou" name="preciou">
                                <input type="hidden" value="{{ $venta->idVenta}}" id="idventa" name="idventa">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <input type="number" class="form-control form-control-sm col-md-4" value="1"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;" max="{{ $item->cantidad }}">
                                <button class="btn btn-primary  col-md-6" class="tooltip-test" title="add to cart"
                                @if ($item->cantidad - $cantidad == 0)
                                    disabled
                                @endif
                                >
                                    Devolver
                                </button>
                            </form>
                           </td>
                           </tr>
                       @endforeach
                       @endif
                     </tbody>
                  </table>
                  {{$recursos->links()}}
            </div>
        </div>
        <br>
        <br>
        <h3 class="header-title">Libros seleccionados:</h2>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Cantidad</th>
                        <th>Total</th>
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
                           <td>{{\Cart::get($item->id)->getPriceSum()}}</td>
                           <td>
                            <form action="{{ route('cart.removed') }}" method="POST" name="f3">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                <input type="hidden" value="{{$venta->idVenta}}" id="idventa" name="idventa">
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
