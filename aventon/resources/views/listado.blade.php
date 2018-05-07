@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de productos
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary pull-ringht">Nuevo</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del usuario</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>ver</td>
                <td>editar</td>
                <td>borrar</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{!!$usuarios->render()}}
    </div>
    <div class="col-sm-4">
            mensaje
    </div>

@endsection