<x-guest-layout>
    {{-- <header>
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
                <li><a href="{{ asset('index') }}">INICIO</a></li>
                <li><a href="{{ asset('entrenadores') }}">ENTRENADORES</a></li>
                <li><a href="{{ asset('contacto2') }}">CONTACTO</a></li>
                <li><a href="{{ asset('registro') }}">REGISTRARSE</a></li>
                <li><a class="activo" href="#">INICIAR SESION</a></li>
            </ul>
        </nav>
    </header> --}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="image_background">
        <div class="login-caja">
            <div class="login-texto">
                <h1>INICIAR SESIÓN</h1>
                <h2>Sigue tu progreso día a día.</h2>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" placeholder="Ingrese su mail" name="email" id="email" required autofocus>

                <input type="password" placeholder="Contraseña" name="password" id="password" required
                    autocomplete="current-password">

                <input class="boton" type="submit" value="INICIAR SESION" name="iniciar">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('¿Aún no tienes cuenta? Crea una ahora mismo') }}
                </a>

                {{-- <a href="#">¿Olvidaste tu contraseña?</a><br>
                <a href="{{ asset('registro') }}">¿No tienes cuenta? ¡Regístrate aquí!</a> --}}
            </form>
        </div>
    </div>

</x-guest-layout>
