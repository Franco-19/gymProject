<x-guest-layout>
    {{-- <nav>
        <div>
            <a href="index.php">
                <img class="logo" src="{{ asset('./css/Imagen/_LogoVis 1.png') }}">
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="bar-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="nav-menu">
            <li><a href="{{ asset('index') }}">INICIO</a></li>
            <li><a href="{{ asset('entrenadores') }}">ENTRENADORES</a></li>
            <li><a href="{{ asset('contacto2') }}">CONTACTO</a></li>
            <li><a class="activo" href="{{ asset('registro') }}">REGISTRARSE</a></li>
            <li><a href="{{ asset('login') }}">INICIAR SESION</a></li>
        </ul>
    </nav> --}}
    <div class="image_background">
        <img src="{{ asset('css/Imagen/background3.png') }}" alt="">
        <div class="registro-caja">
            <div class="registro-texto">
                <h1>REGISTRARSE</h1>
                <h2>Sigue tu progreso día a día.</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="name"></label>
                <input id="name" name="name" type="text" placeholder="Nombre" required>

                <label for="apellido"></label>
                <input type="text" placeholder="Apellido" id="apellido" name="apellido">

                <label for="mail"></label>
                <input type="email" placeholder="Email" id="email" name="email">

                <label for="username"></label>
                <input type="text" placeholder="Nombre de usuario" id="usuario" name="usuario">

                <label for="contraseña"></label>
                <input type="password" placeholder="Contraseña" id="contraseña" name="contraseña">
                <label for="contraseña"></label>
                <input type="password" placeholder="Confirmar contraseña" id="contraseña" name="contraseña">

                <label for="telefono"></label>
                <input type="number" placeholder="Número de teléfono" id="telefono" name="telefono">

                <br><label class="terminos-condiciones" for="condiciones">Acepta los <a
                        href="pagina_condiciones.html">términos y condiciones</a>
                    <input type="checkbox" name="condiciones"></label>

                <input class="boton" type="submit" value="REGISTRARSE" id="registrarse">


                <a href="{{ asset('login') }}">¿Ya tienes cuenta? ¡Inicia sesión aquí!</a>
            </form>
        </div>
    </div>
</x-guest-layout>
