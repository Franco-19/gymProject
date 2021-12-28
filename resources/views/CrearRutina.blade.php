<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/CrearRutina.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<script defer src="{{ asset('js/Menu.js') }}"></script>
	<script src="https://kit.fontawesome.com/b29f7a8e25.js" crossorigin="anonymous"></script>
	<title>Inicio</title>
</head>
<body>
	<header class="header-menu">
	<nav class="Menu">
		<button class="bars">
			<i class="fas fa-bars"></i>
		</button>
		<p class="Encabezado">CREAR RUTINA</p>
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
					<a href="Profesores.blade.php" class="Menu__ul-li-a">Profesores</a>
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
		<!--
		<div class="FormRutinas__Busqueda">
			<input type="text" class="InputTextoBusqueda" placeholder="Sentadilla...">
		</div>
	-->
		<div class="FormRutinas__Pectoral">
			Pectoral
			<input type="submit" class="FormRutinas__DivSubmit" value="+">
		</div>
		<div class="FormRutinas__Piernas">
			Piernas
			<input type="submit" class="FormRutinas__DivSubmit"value="+">
		</div>
		<div class="FormRutinas__Brazos">
			Brazos
			<input type="submit" class="FormRutinas__DivSubmit"value="+">
		</div>
		<div class="FormRutinas__Espalda">
			Espalda
			<input type="submit" class="FormRutinas__DivSubmit"value="+">
		</div>
	</form>
</body>
</html>