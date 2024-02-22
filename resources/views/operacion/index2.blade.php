@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="styles.css" />
<div class="page-wrapper">
    <div class="content container-fluid">
        <h2 class="header-title">Lista De Recursos Adquiridos</h2>
     
            <header>
                <h1>Tienda</h1>
                <a href="{{route("Operacion.pdf")}}" class="btn btn-primary"> <i class="fas fa-plus"></i> PDF </a>
                <div class="container-icon">
                    <div class="container-cart-icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="icon-cart"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                            />
                        </svg>
                        <div class="count-products">
                            <span id="contador-productos">0</span>
                        </div>
                    </div>
    
                    <div class="container-cart-products hidden-cart">
                        <div class="row-product hidden">
                            <div class="cart-product">
                                <div class="info-cart-product">
                                    <span class="cantidad-producto-carrito">1</span>
                                    <p class="titulo-producto-carrito">Zapatos Nike</p>
                                    <span class="precio-producto-carrito">$80</span>
                                </div>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="icon-close"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </div>
                        </div>
    
                        
                        <form method="POST" action="{{ route('operacion.store') }}">
                            @csrf
                            <div class="cart-total hidden">
                                <p>SubTotal:</p>
                                <span class="total-pagar" id="valor1" ></span>
                                <p>IGV:</p>
                                <span class="igv" id="valor2" ></span>
                                <p>Total:</p>
                                <span class="totalmaxx" id="valor3" ></span>
                            </div>
                            <p class="cart-empty">El carrito está vacío</p>
                            <input type="text" name="descripcion" id="nombrest" style="visibility: hidden;" >
                            <input type="text" id="selectedValueInput" name="id_usuario" style="visibility: hidden;">
                            <input type="text" id="subtotalInput" name="subtotal" style="visibility: hidden;">
                            <input type="text" id="igvInput" name="igv" style="visibility: hidden;">
                            <input type="text" id="totalInput" name="total" style="visibility: hidden;">

                            <button class="btn btn-primary">
                                <i class="fa fa-save"></i>Comprar
                            </button>
                        </form>
                    </div>

                </div>
            </header>

            <div class="form-group">
                <label>Proveedores <span class="star-red">*</span></label>
                <select name="id_usuario" class="select form-control" id="miSelect" onchange="updateInputValue()">
                    <option  selected="selected">Select</option>
                    @foreach ($usuario as $item)
                        @if($item->id_rol==5)
                        <option value="{{$item->id_usuario}}"> {{$item->nombre}} </option>
                        @endif
                        
                     @endforeach
                </select>
            </div>
            
            <br>
            <h3>Recursos Bibliograficos</h3>
            <br>
            
           
            <div class="container-items">
                @foreach ($recurso as $item)
                <div class="item">
                    <div class="info-product">
 
                        <h2 style="font-weight: 700; font-size: 16px">{{$item->titulo}}</h2>

                        <p class="price">S/.{{$item->preciou}}</p>
                       
                        <button class="btn-add-cart">Añadir al carrito</button>

                    </div>
                </div>
                @endforeach
                <br>
                <br><br>
                <h3>Recursos No  Bibliograficos</h3>
                <br>
                <div class="item" style="visibility: hidden;">
                    <div class="info-product">
 
                        <h2 style="font-weight: 700; font-size: 16px">{{$item->nombreP}}</h2>

                        <p class="price">S/.{{$item->preciou}}</p>
                       
                        <button class="btn-add-cart">Añadir al carrito</button>

                    </div>
                </div>
                @foreach ($recurson as $item)
                <div class="item">
                    <div class="info-product">
 
                        <h2 style="font-weight: 700; font-size: 16px">{{$item->nombreP}}</h2>

                        <p class="price">S/.{{$item->preciou}}</p>
                       
                        <button class="btn-add-cart">Añadir al carrito</button>

                    </div>
                </div>
                @endforeach
            </div> 

            <br>
            
            <br>
            

            <div class="container-items2">
            
            </div> 
       
   
        <script src="index.js"></script>
        <script>
            function updateInputValue() {
            var selectElement = document.getElementById("miSelect");
            var selectedValue = selectElement.value;
            var inputElement = document.getElementById("selectedValueInput");
            inputElement.value = selectedValue;
        }
       

        </script>
    </div>
</div>
@endsection