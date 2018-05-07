@extends('layout')

@section('content')

    <div class="col-8">
        <h2>
            Editar Usuario
            <a class="btn btn-primary float-right" role="button" href="{{ route('usuarios.index') }}">Listado</a>
        </h2>

        {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'PUT']) !!}

            @include('usuarios.fragment.form')

        {!! Form::close() !!}
    </div>
        <vid class="col-4">
        @include('usuarios.fragment.aside')
    </vid>

@endsection