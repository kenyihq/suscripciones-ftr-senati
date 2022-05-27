<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> GRUPO 1 </title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>  
    <link href="https: //fonts.googleapis.com/css2? family = Open + Sans: wght @ 300; 400; 700 & display = swap "rel =" stylesheet ">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>
<body>
    <header class="header" id="incio">
        <img src="img/hamburguesa.svg" alt="" class="hamburger">
        <nav class="menu-navegacion">
            <a class="fs-1 fw-bold" href="#incio">Inicio</a>
            <a class="fs-1 fw-bold" href="#servicio">Servicio</a>
            <a class="fs-1 fw-bold" href="#portafolio">Portafolio</a>
            <a class="fs-1 fw-bold" href="#expertos">Expertos</a>
            <a class="fs-1 fw-bold" href="#contacto">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">BIENVENIDO</h1>
            <p
             class="copy">La mejor experiencia visual y al mejor precio</p>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a class="btn btn-success" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesion</a>
                        
                        @if (Route::has('register'))
                        
                        <a class="btn btn-warning" href="{{ route('register') }}">Registrarme</a>

                        @endif
                    @endauth
                </div>
            @endif

        </div>

        </div>
    </header>
    <main>
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="img/fortnite.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"> <span class="number">1</span>Peliculas</h3>
                        <p>Las mejores peliculas del 2022 a tu alcanse.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"> <span class="number">2</span>Música</h3>
                        <p>Tenemos las mejores canciones que te gustan pop, rock, bachata y mas </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"> <span class="number">3</span>Plataformas</h3>
                        <p>Tenemos las mejores plataformas del mundo a tu alcanse y un solo boton </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Plataformas</h2>
                <div class="contenedor-galeria">
                    <img src="img/netflix.jpg" alt="" class="img-galeria">
                    <img src="img/spotify.png" alt="" class="img-galeria">
                    <img src="img/disney.webp" alt="" class="img-galeria">
                    <img src="img/aple music.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen light">
            <img src="img/bx-x.svg" alt="" class="close">
            <img src="" alt="" class="agregar imagen">
        </section> 
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/Fitness_Isometric.svg" alt="">
                    <h3 class="n-expert">Dinamicas</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Lunch break_Outline.svg" alt="">
                    <h3 class="n-expert">Diversion</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Data Arranging_Monochromatic.svg" alt="">
                    <h3 class="n-expert">Analisis</h3>
                </div>
            </section>
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contacto-us">
                <h2 class="brand">Grupo 1</h2>
                <p>Somos expertos en generar la mejor distraccion</p>
            </div>
            <div class="social-media">
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>


    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>