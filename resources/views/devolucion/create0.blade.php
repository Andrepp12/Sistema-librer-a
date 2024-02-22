@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <form action="{{route('devolucion.create')}}" method="POST">
                {{ csrf_field() }}
            <div class="col-md-6">
                <h2 class="header-title">Registrar Nueva Devolución</h2><br>
                <h3>Venta</h3>
                <input type="number" min="1" name="idventa" id="idventa">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('cart.cleard') }}" style="color: white" class="btn btn-primary">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
