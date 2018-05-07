@extends('layout')

@section('content')

    <div class="col-8">
        <h2>
            Listado de usuarios
            <a class="btn btn-primary float-right" href="{{ route('usuarios.create') }}">Nuevo</a>
        </h2>
        @include('usuarios.fragment.info')
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
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>
                        <a class="btn btn-link" href="{{ route('usuarios.show', $usuario->id) }}">ver</a>
                    </td>
                    <td>
                        <a class="btn btn-link" href="{{ route('usuarios.edit', $usuario->id) }}">editar</a>
                    </td>
                    <td>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                            <!-- Protección de seguridad -->
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $usuarios->render() !!}
    </div>
    <vid class="col-4">
        @include('usuarios.fragment.aside')
    </vid>

@endsection