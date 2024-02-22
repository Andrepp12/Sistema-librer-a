@extends('layouts.master')

@section("titulo","ASISTENCIA")


@section("content")
    <div class="page-wrapper" style="margin-top: 100px">
        <h1 style="display: flex; justify-content: center; color: rgb(0, 0, 204);background-color: bisque">Control Año {{$a}}</h1>
        <a href="{{route('asistencia.ano')}}" class="btn btn-danger">
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
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '01'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">FEBRERO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '02'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">MARZO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '03'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">ABRIL</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '04'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">MAYO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '05'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">JUNIO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '06'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">JULIO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '07'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">AGOSTO</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '08'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">SEPTIEMBRE</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '09'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">OCTUBRE</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '10'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">NOVIEMBRE</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '11'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">DICIEMBRE</td>
                    <td>
                        <a href="{{route('asistencia.asistencia', ['a' => $a, 'm' => '12'])}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i>Ver</a>
                    </td>
                </tr>
            </tbody>
        </table>
    
        </div>

    </div>

    @endsection