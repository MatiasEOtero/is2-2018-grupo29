@extends('layout')

@section('content')

    <div class="col-8">
        <h2>
            Nuevo Usuario
            <a class="btn btn-primary float-right" role="button" href="{{ route('usuarios.index') }}">Listado</a>
        </h2>

        <!-- Por defecto lo toma como POST -->
        {!! Form::open(['route' => 'usuarios.store']) !!}

            @include('usuarios.fragment.form')

        {!! Form::close() !!}
    </div>
        <vid class="col-4">
        @include('usuarios.fragment.aside')
    </vid>

@endsection