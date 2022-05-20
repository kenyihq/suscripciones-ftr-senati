<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Grupo 1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style_app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>        
        @guest
            @if (Route::has('login'))            
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                </li> -->
            @endif

            @if (Route::has('register'))
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                </li> -->
            @endif
        @else        
        <div class="logo">
            <a href="{{ url('/home') }}">
                <img src="{{ asset('img/logo_senati.svg') }}" alt="">
            </a>             
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span>Bienvenido {{ Auth::user()->name }}</h2></span> 
                </a>
                <a class="navbar-brand" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <button class="btn btn-outline-danger">
                            {{ __('Cerrar sesion') }}
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <div class="container">
            
            <a type="button" class="btn btn-outline-warning" href="/suscripcions">MIS SUSCRIPCIONES</a>
        </div>

        @endguest

        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>

        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright text-center py-3">
                            <p>© 2022 Copyright:
                                <a href="https://www.senati.edu.pe/" style="text-decoration: none;">SENATI</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                    
    </body>
</html>