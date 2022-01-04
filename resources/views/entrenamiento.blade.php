<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entrenamiento</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('css/Imagen/favicon-32x32.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/entrenamientoStyles.css') }}">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, min">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300;1,700&display=swap"
        rel="stylesheet">
    <script src="http://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav>
            <div>
                <a href="index.php">
                    <img class="logo" src="{{ asset('./css/Imagen/_LogoVis 1.png') }}">
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="bar-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-menu">
                <li><a href="{{ route('index') }}">INICIO</a></li>
                <li><a href="{{ route('entrenadores') }}">ENTRENADORES</a></li>
                <li class="activo"><a href="{{ route('entrenamiento') }}">ENTRENAMIENTO</a></li>
                {{-- <li><a href="{{ route('contacto2') }}">CONTACTO</a></li> --}}
                {{-- <li><a href="{{ route('registro') }}">REGISTRARSE</a></li> --}}

                {{-- <li><a href="#">INICIAR SESION</a></li> --}}
            </ul>
        </nav>
        <div class="banner-texto">
            <h1>¿CÓMO QUIERES EJERCITARTE HOY?</h1>
            <h2>ELIGE TU RUTINA</h2>
        </div>
        <div class="elegir-rutinas">
            <a href="{{ route('rutinaPrincipiante') }}" class="boton1">RUTINA PRINCIPIANTE</a>
            <a href="{{ route('rutinaPersonalizada') }}" class="boton2">RUTINA PERSONALIZADA</a>
        </div>

    </header>


    <section class="seccion2">
        <div class="background2">
            <p class="titulo2">COMIENZA A ENTRENARTE</p>
            <p class="subTituloCrearRutina">CREA TU RUTINA</p>
            <div class="busqueda-caja">
                <input type="search" id="buscar" placeholder="Buscar..." />
                <button type="submit"><i class="botonBuscar"></i></button>
            </div>
            <div class="contenedorEjercicios">
                {{-- @foreach ($ejercicios as $ejercicio)
                    {{-- revisar de realizar un formulario --}}

                    <div class="d-flex gap-3 mb-3 align-items-center">
                        <div class="miniEjercicio1">
                            <img class="mini1" src="{{ asset('css/Imagen/mini1.png') }}" alt="mini1">
                            {{-- <p>Nombre: {{ $ejercicio->nombreEjercicio }}</p> --}}
                            {{-- <button type="submit" class="botonAgregar">+</button> --}}
                        </div>
                        {{-- <li>
                            Id: {{ $ejercicio->idejercicios }}
                        </li>
                        <li>
                            Nombre: {{ $ejercicio->nombreEjercicio }}
                        </li>
                        <li>
                            Musculo: {{ $ejercicio->musculo }}
                        </li> --}}
                        {{-- <button onclick="doSomeAction({{ $ejercicio }})" class="btn btn-primary addEjercicioToAlumno">
                        añadir
                    </button> --}}
                        {{-- <form class="addResourceToDb" action="{{ route('user.store') }}" method="POST"> --}}
                            @csrf
                            {{-- <input type="hidden" value="{{ $ejercicio }}" name="ejercicio"> --}}

                            {{-- <input type="text"> --}}
                            {{-- <button type="submit" class="btn btn-primary" class="botonAgregar">+</button> --}}
                        {{-- </form> --}}
                    {{-- </div> --}}
                {{-- @endforeach --}}
                {{-- <div class="miniEjercicio2">
                    <img class="mini2" src="{{ asset('css/Imagen/mini2.png') }}" alt="mini2">
                    <button type="submit" class="botonAgregar">+</button>
                </div>
                <div class="miniEjercicio3">
                    <img class="mini3" src="{{ asset('css/Imagen/mini3.png') }}" alt="mini3">
                    <button type="submit" class="botonAgregar">+</button>
                </div>
                <div class="miniEjercicio4">
                    <img class="mini4" src="{{ asset('css/Imagen/mini4.png') }}" alt="mini4">
                    <button type="submit" class="botonAgregar">+</button>
                </div>
                <div class="miniEjercicio5">
                    <img class="mini5" src="{{ asset('css/Imagen/mini5.png') }}" alt="mini5">
                    <button type="submit" class="botonAgregar">+</button>
                </div>
                <div class="miniEjercicio6">
                    <img class="mini6" src="{{ asset('css/Imagen/mini6.png') }}" alt="mini6">
                    <button type="submit" class="botonAgregar">+</button>
                </div> --}}

            </div>
            <div class="caja-empezar"><button type="submit" class="empezar">EMPECEMOS</button></div>
        </div>

    </section>
    {{-- <footer >
        <ul class="FinDePagina">
                <li class="FinDePaginaItems">
                    <a href="#">GymAPP 2021</a>
                </li>
                <li class="FinDePaginaItems">
                    <a href="#">│ ElGrupo10</a>
                </li>
            </ul>
            <ul class="FinDePagina2">
                <li class="FinDePaginaItems">
                    <a href="#">│ HOME │</a>
                </li>
                <li class="FinDePaginaItems">
                    <a href="#">│ CONTACTO │</a>
                </li>
                <img class="imgEnd" src="{{ asset('./css/Imagen/logo.png') }}">
            </ul>
      </footer> --}}
</body>

</html>
