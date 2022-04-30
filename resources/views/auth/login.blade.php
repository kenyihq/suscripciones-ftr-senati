
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
</head>
<body>    

<div class="loginbx">
    <img class="logo" src="img/logo grupo1-2.jpg" alt="logo grupo">
        <h1>Hola compañeros, somos el grupo 1</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">
            {{ __('Email') }}</label>
        <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="password">
            {{ __('Contraseña') }}</label>    
        <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="submit" value="Iniciar sesion">

        <button>
            <a href="{{ route('register') }}">Registrate</a>
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
        @endif
    </form>
</div>
<div class="txtdinamic">
    <p>Te damos una</p>
    <ul>
        <li>mano</li>
        <li>ayuda</li>
        <li>gestión</li>
    </ul>
    </div>
    <div class="txtdinamicu">
        <p>en tus suscripciones.</p>
    </div>

</body>


@endsection
