@extends('layout')

@section('content')

    <div class="col-8 center-block text-center">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <h1>
          Aventon
        </h1>
        <ul>
            <li><a href="{{route('usuarios.index') }}">Listado de usuarios</a></li>
        </ul>
    </div>

@endsection