<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/CrearUsuario.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<title>Ingreso</title>
</head>
<body>
	<div class="Form__Login-img"></div>
	<form class="Form__Login">
		<div class="Form__Login-div">
			<input type="text" class="Form__Login-div-input"placeholder="Nombre">
			<input type="text" class="Form__Login-div-input"placeholder="Apellido">
			<input type="email" class="Form__Login-div-input"placeholder="Ingrese un Mail">
			<input type="password"class="Form__Login-div-input" placeholder="Contraseña">
			<input type="password"class="Form__Login-div-input" placeholder="Confirmar Contraseña">
			<input type="text" class="Form__Login-div-input"placeholder="Número de teléfono">
		</div>
		<div class="Acess">
			<a href="#">Acepta términos y condiciones</a>
			<input type="checkbox" class="Acess___input">
		</div>
		<input type="submit" value="Registrarse" class="Form__Login-button">
	</form>

</body>
</html>