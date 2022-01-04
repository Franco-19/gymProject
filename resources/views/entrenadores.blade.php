<!DOCTYPE html>
<html lang="en">
<head>
  <title>Entrenamiento</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="{{ asset('.css/Imagen/favicon-32x32.png') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/entrenadoresStyles.css') }}">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, min">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300;1,700&display=swap" rel="stylesheet">
  <script src="http://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
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
        </header>
      <div class="entrenadores-caja">
        <div class="entrenadores-texto">
        <h1 >NUESTRO EQUIPO</h1>
        <h2 >¡Conóselos!</h2>
        <img class="flecha" src="{{ asset('./css/Imagen/Flecha Abajo.png') }}">

            <div class="personas-caja">
                <div>
                    <img class="personaA" src="{{ asset('./css/Imagen/Persona 1.png') }}">
                    <h2 class="nombre">ENTRENADOR A</h2>
                </div>
                <div>
                    <img class="personaB" src="{{ asset('./css/Imagen/Persona 2.png') }}">
                    <h2 class="nombre">ENTRENADORA B</h2>
                </div>
                <div>
                    <img class="personaC" src="{{ asset('./css/Imagen/Persona 3.png') }}">
                    <h2 class="nombre">ENTRENADOR C</h2>
                </div>
            </div>
        </div>

    </div>

</header>
<footer >
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
      </footer>
</body>
</html>
