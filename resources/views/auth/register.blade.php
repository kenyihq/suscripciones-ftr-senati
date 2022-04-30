@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <div class="loginbx">
        <img class="logo" src="img/logo grupo1-2.jpg" alt="logo grupo">
        <h1>Register Here</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf  
            <!--Registro - nombre -->
            <label for="name">{{ __('Nombre') }}</label>
            <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--Registro - email-->
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <!--Registro - password-->
            <label for="password">
                {{ __('Contraseña') }}</label>
            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--Registro - repertir-password-->
            <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            <!--BUTTON-->
            <input type="submit" value="Registrar">
            <!--Incio opciones:-->
            <a>Somos G1 - Grupo que te ayuda con tus suscripciones</a>
            
        </form>
    </div>
</body>
</html>

@endsection
