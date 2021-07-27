@extends('index')

@section('contenido')

<div class="content">
    <div class="container-fluid">
        <div class="container">
            <a href="{{route('clientes')}}">
                <button class="btn btn-primary">
                    Alta de nuevos clientes.
                </button>
            </a>
        </div>
        <!-- <div class="container">
            <a href="#">
                <button class="btn btn-secondary">
                    PDF de Usuarios.
                </button>
            </a>
        </div> -->
        @if(Session::has('mensaje'))
        <div>
            <button type="button" class="alert alert-success">{{Session::get('mensaje')}}</button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header card-header-primary">
                        Reportes
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        <center>Clave</center>
                                    </th>
                                    <!-- <th>
                                        <center>Foto</center>
                                    </th> -->
                                    <th>
                                        <center>Nombre</center>
                                    </th>
                                    <th>
                                        <center>Apellidos</center>
                                    </th>
                                    <th>
                                        <center>telefono</center>
                                    </th>
                                    <th>
                                        <center>Operaciones</center>
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($consulta as $object)
                                    <tr>
                                        <td>
                                            <center>{{$object->idcliente}}</center>
                                        </td>
                                        <!-- <td>
                                            @if($object->img == null)
                                            <center><img src="{{asset('files/sinfoto.jpg')}}" height="50" width="50"></center>
                                            @else
                                            <center><img src="{{asset('files/'. $object->img)}}" height="50" width="50"></center>
                                            @endif
                                        </td> -->
                                        <td>
                                            <center>{{$object->nombre}}</center>
                                        </td>
                                        <td>
                                            <center>{{$object->app}} {{$object->apm}}</center>
                                        </td>
                                        <td>
                                            <center>{{$object->telefono}}</center>
                                        </td>
                                        <!-- <td>
                                            <center>{{$object->celular}}</center>
                                        </td> -->
                                        <td class="td-actions text-primary">
                                            <center>
                                                modificaciones
                                            </center>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop