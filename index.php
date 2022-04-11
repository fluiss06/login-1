<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Registro | fluiss</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/estilos.css">

</head>
<body>
	<main>
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>Ya tienes cuenta?</h3>
					<p>Inicia sesion para entrar en la pagina</p>
					<button id="btn__iniciar-sesion">Iniciar sesion</button>
				</div>
				<div class="caja__trasera-register">
					<h3>Aun no tienes una cuenta?</h3>
					<p>Registrate para iniciar sesion</p>
					<button id="btn__registrarse">Registrarse</button>
				</div>
			</div>
<!-- formularios de login y registro -->
			<div class="contenedor__login-register">
				<!-- login -->
				<form action="" class="formulario__login">
					<h2>Iniciar Sesion</h2>
					<input type="text" placeholder="Correo Electronico">
					<div class="campo">						
						<input type="password" name="password" id="password" placeholder="Contraseña">
						<span>Mostrar</span>
					</div>

					<button>Entrar</button>
				</form>
				<!-- registro -->
				<form action="" class="formulario__register">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre Completo">
					<input type="text" placeholder="Correo Electronico">
					<input type="text" placeholder="Usuario">
					<div class="campo">						
						<input type="password" name="password" id="password" placeholder="Contraseña">
						<span>Mostrar</span>
					</div>
					<button>Registrarse</button>
				</form>
			</div>
		</div>
	</main>

	<script src="assets/js/script.js"></script>
	
</body>
</html>
