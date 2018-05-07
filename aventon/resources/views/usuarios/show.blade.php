@extends('layout')

@section('content')

    <div class="col-8">
        <h2>
            {{ $usuario->name }}
            <a class="btn btn-primary float-right" role="button" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
        </h2>
        <p>
            {{ $usuario->email }}
        </p>
        <p>
          {{ $usuario->fechanacimiento }}
        </p>
        <p>
          {{ $usuario->cuenta }}
        </p>
        {!! $usuario->body !!}
    </div>
        <vid class="col-4">
        @include('usuarios.fragment.aside')
    </vid>

@endsection