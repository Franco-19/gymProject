<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rutina Personalizada</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('./css/Imagen/favicon-32x32.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rutinas.css') }}">
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
    </header>
    <section class="seccion2">
        <div class="rutina-caja">
            <div class="rutina-texto">
                <h1>RUTINA PERSONALIZADA</h1>
                <h2>Tu progreso a lo largo del mes.</h2>
            </div>
        </div>
        <div class="tablaDetalles">
            <table class="detalles">
                <tr class="encabezado">
                    <th>ZONA DEL CUERPO</th>
                    <th>TIPO</th>
                    <th>DURACION</th>
                    <th>ENTRENADOR/A</th>
                    <th></th>
                </tr>

                <tr>
                    <td>TOTAL</td>
                    <td>CALENTAMIENTO</td>
                    <td>15 MIN</td>
                    <td>ENTRENADORA B</td>
                    <td><input clas="eliminar" type="button" name="name"></td>
                </tr>
                <tr>
                    <td>BRAZOS</td>
                    <td>FUERZA</td>
                    <td>20 MIN</td>
                    <td>ENTRENADOR A</td>
                </tr>

                <tr>
                    <td>ESPALDA</td>
                    <td>FUERZA</td>
                    <td>20 MIN</td>
                    <td>ENTRENADOR A</td>
                </tr>
                <tr>
                    <td>PIERNAS</td>
                    <td>FUERZA</td>
                    <td>20 MIN</td>
                    <td>ENTRENADOR A</td>
                </tr>
            </table>
        </div>
    </section>

    {{-- <footer>
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
