@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Registrar Nueva Compra</h2><br>
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
                            <form action="{{route('cart.store1')}}" method="POST" name="f2">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->idRecurso }}" id="idrecurso" name="idrecurso">
                                <input type="hidden" value="{{ $item->titulo }}" id="titulo" name="titulo">
                                <input type="hidden" value="{{ $item->autor }}" id="autor" name="autor">
                                <input type="hidden" value="{{ $item->editorial }}" id="editorial" name="editorial">
                                <input type="hidden" value="{{ $item->preciou }}" id="preciou" name="preciou">
                                <input type="hidden" value="{{ $item->stock }}" id="stock" name="stock">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <input type="number" class="form-control form-control-sm col-md-4" value="1"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;" max="{{ $item->stock - $cantidad }}">
                                <button class="btn btn-primary  col-md-6" class="tooltip-test" title="add to cart"
                                @if ($item->stock == 0)
                                    disabled
                                @endif
                                >
                                    <i class="fa fa-shopping-cart"></i> Agregar
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
                            <form action="{{ route('cart.remove1') }}" method="POST" name="f3">
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

        <div class="row">
            <form action="{{route('operacion.store')}}" method="POST" name="f1">
                {{ csrf_field() }}
            <div class="col-md-6">
                
                <h3>Proveedores</h3>
                <select name="id_usuario" id="id_usuario" class="form-control">
                    @if(count($recursos)<=0)
                        <option selected disabled>No hay registros</option>
                    @else
                        <option selected disabled>Seleccione un proveedor</option>
                        @foreach ($proveedor as $item)
                            @if($item->id_rol==5)
                            <option value="{{$item->id_usuario}}"> {{$item->nombre}} </option>
                            @endif
                        @endforeach
                    @endif
                </select>
                <br>
            </div>
            <div class="col-md-6">
                
                <h3>Almacen</h3>
                <select name="idAlmacen" id="idAlmacen" class="form-control">
                    @if(count($recursos)<=0)
                        <option selected disabled>No hay registros</option>
                    @else
                        <option selected disabled>Selecciona un almacen</option>
                        @foreach ($almacen as $item)
                            <option value="{{$item->idAlmacen}}"> {{$item->nombre}} </option>
                        @endforeach
                    @endif
                </select>
                <br>
            </div>
            <div class="col-md-6" align="right" style="align-items: end">
                <button class="btn btn-primary" class="tooltip-test">Comprar</button>
                <a href="{{ route('cart.clear1') }}" style="color: white" class="btn btn-primary">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
