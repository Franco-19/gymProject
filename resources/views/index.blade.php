<x-app-layout>
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
    <section class="seccion1">
        <div class="titulo-caja">
            <h1 class="titulo">¿Listo para cambiar la forma de ver el entrenamiento?</h1>
            <h1 class="tituloSecundario">Con Gymapp todo será mucho mas fácil</h1>
            <p class="texto1">En Gymapp contamos con una gran variedad de ejercicios, rutinas y profesionales,
                todos a tu disposición para lograr la mejor experiencia en tu entrenamiento</p>
            <button class="flecha1">
        </div>
    </section>
    <section class="seccion2">
        <div class="titulo-seccion2">
            <h1 class="t1-s2">RUTINAS</h1>
            <h1 class="t2-s2">PERSONALIZADAS</h1>
            <h1 class="tituloSec-s2">Contamos con una extensa variedad de posibilidades de uso</h1>
            <p class="texto-seccion2">Con GymAPP puedes armar tus propias rutinas personalizadas
                basándote en el tipo de actividades que quieras hacer.
                Ajusta tu entrenamiento como más te guste.
                ¡Es rápido y fácil! </p>
                <a style="color: black" href="{{ route('rutinaPersonalizada') }}">
                    <input class="empieza-boton" id="empiezaboton" type="button" value="EMPIEZA YA">
                </a>

        </div>

    </section>


    <section class="seccion3">
        <div class="contacto-caja">
            <div class="contacto-texto">
                <h1>CONTACTO</h1>
                <h2>Si tienes una consulta puedes ponerte en contacto con nosotros.</h2>
            </div>
            <form>
                <label for="nombre"></label>
                <input type="text" placeholder="Nombre" name="nombre">

                <label for="apellido"></label>
                <input type="text" placeholder="Apellido" name="apellido">

                <label for="mail"></label>
                <input type="email" placeholder="Email" name="email">

                <label for="mensaje"></label>
                <textarea class="mensaje-campo" placeholder="Mensaje" name="msg" spellcheck="false"></textarea>

                <input class="boton" type="submit" value="ENVIAR">
            </form>
        </div>
    </section>

    <footer>
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
</x-app-layout>
