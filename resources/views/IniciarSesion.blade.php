<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/IniciarSesion.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<title>Iniciar Sesión</title>
</head>
<body>
	<div class="Form__Login-img"></div>
	<form class="Form__Login">
		<div class="Form__Login-div">
			<input type="text" class="Form__Login-div-input"placeholder="Nombre de Usuario o Mail">
			<input type="password"class="Form__Login-div-input" placeholder="Contraseña">
		</div>
		<input type="submit" value="Iniciar Sesión" class="Form__Login-button">
	</form>
	<div class="Acess">
		<a href="#">¿Olvidaste tu contraseña?</a>
	</div>
	
</body>
</html>