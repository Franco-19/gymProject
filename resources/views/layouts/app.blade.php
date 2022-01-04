<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, min">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300;1,700&display=swap"
        rel="stylesheet">
    <script src="http://kit.fontawesome.com/2cb25f2c39.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    {{-- <script src="{{ asset('js/addSomething.js') }}"></script> --}}

    {{-- Styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

</head>

<body class="font-sans antialiased">
    <div class="image_background">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    {{-- <div class="min-h-screen bg-gray-100"> --}}
    {{-- @include('layouts.navigation') --}}

    <!-- Page Heading -->
    {{-- <header class="bg-white shadow">
            <div>
                <a href="{{ route('index') }}">
                    <img class="logo" src="{{ asset('./css/Imagen/_LogoVis 1.png') }}">
                </a>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="bar-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-menu">
                <li><a href="{{ route('index') }}">INICIO</a></li>
                <li><a href="{{ route('entrenadores') }}">ENTRENADORES</a></li>
            </ul>
        </header> --}}


    {{-- </div> --}}
</body>

</html>
