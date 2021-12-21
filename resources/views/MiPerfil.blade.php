<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/MiPerfil.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<script defer src="{{ asset('js/Menu.js') }}"></script>
	<script src="https://kit.fontawesome.com/b29f7a8e25.js" crossorigin="anonymous"></script>
	<title>Mi Perfil</title>
</head>
<body>
	<header class="header-menu">
	<nav class="Menu">
		<button class="bars">
			<i class="fas fa-bars"></i>
		</button>
		<p class="Encabezado">MI PERFIL</p>
		<ul class="Menu__ul">
			<li class="Menu__ul-li">
					<i class="fas fa-home"></i>
					<a href="IniciarSesion.blade.php" class="Menu__ul-li-a">Inicio</a>
			</li>
			<li class="Menu__ul-li">
					<i class="fas fa-dumbbell"></i>
					<a href="MisRutinas.blade.php" class="Menu__ul-li-a">Mis Rutinas</a>
			</li>
			<li class="Menu__ul-li">
					<i class="fas fa-calendar-alt"></i>
					<a href="CrearRutina.blade.php" class="Menu__ul-li-a">Crear Rutinas</a>
			</li>
			<li class="Menu__ul-li">
					<i class="fas fa-chalkboard-teacher"></i>
					<a href="#" class="Menu__ul-li-a">Profesores</a>
			</li>
			<li class="Menu__ul-li">
				<i class="fas fa-envelope"></i>
				<a href="#" class="Menu__ul-li-a">Contacto</a>
			</li>
			<li class="Menu__ul-li">
					<i class="fas fa-sign-out-alt"></i>
					<a href="#" class="Menu__ul-li-a">Cerrar Sesion</a>
			</li>
		</ul>
		<button class="user">
			<i class="fas fa-user-circle"></i>
		</button>
	</nav>
</header>
	<form class="FormRutinas">
			<div class="Form__Login-div">
			<input type="text" class="Form__Login-div-input"placeholder="Nombre" readonly>
			<input type="text" class="Form__Login-div-input"placeholder="Apellido" readonly>
			<input type="password"class="Form__Login-div-input" placeholder="Contraseña" readonly>
			<input type="mail"class="Form__Login-div-input" placeholder="Email" readonly>
			<input type="number"class="Form__Login-div-input" placeholder="Numero de teléfono" readonly>
			</div>
		<div class="icon-usuario">
			<i class="fas fa-user"></i>
		</div>
		<input type="submit" value="EDITAR" class="Form__button">
	</form>
</body>
</html>