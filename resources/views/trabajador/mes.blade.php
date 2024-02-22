@extends('layouts.master')


@section("titulo","TRABAJADORES")


@section("content")

    <div class="page-wrapper" style="margin-top: 100px">
        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Control Año {{$a}}</h1>
        <h3 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque; gap: 80px">
            <label for="">CÓDIGO: {{$trabajador->idTrabajador}}</label>
            <label for="">NOMBRES: {{$trabajador->nombreT}}</label>
            <label for="">ROL: {{$trabajador->nombreR}}</label></h3>
    
            <a href="{{route('trabajador.ano',$trabajador->idTrabajador)}}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>Atrás</a>
    
    
      <div class="table-responsive" style="margin-top: 10px">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center">Mes</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center">ENERO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '01','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">FEBRERO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '02','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">MARZO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '03','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">ABRIL</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '04','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">MAYO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '05','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">JUNIO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '06','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">JULIO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '07','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">AGOSTO</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '08','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">SEPTIEMBRE</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '09','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">OCTUBRE</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '10','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">NOVIEMBRE</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '11','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">DICIEMBRE</td>
                    <td>
                        <a href="{{route('trabajador.asistencia', ['a' => $a, 'm' => '12','id' => $trabajador->idTrabajador])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
            </tbody>
            </table>
    
        </div>
    
    
    </div>
@endsection
