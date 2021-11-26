<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
	include('conexion/config.php');
	$emailUser 		 = $_REQUEST['emailUser'];
	$passwordUser    = $_REQUEST['passwordUser'];
	$nameUser  		 = $_REQUEST['nameUser'];

	$PasswordHash = password_hash($passwordUser, PASSWORD_BCRYPT); //Incriptando clave

	$queryInsert  = ("INSERT INTO myusers(emailUser,passwordUser, nameUser) VALUES ('$emailUser','$PasswordHash','$nameUser')");
	$resultInsert = mysqli_query($con, $queryInsert);
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="assets/css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/perfil.jpeg">
	<title>Login sesión con PHP y MySQL</title>
</head>
<body>
	<!-- PHP - Forma segura de almacenar contraseñas -->
	<!---Nunca almacene las contraseñas como texto sin formato. Es tan bueno como no tener ninguna contraseña.
Nunca use MD5 o SHA1 para hash. 
Son extremadamente rápidos y vulnerables a los ataques de fuerza bruta. Una GPU potente podría romper fácilmente el hash md5.-->
	<div class="contenedor">
		<div class="columna-izquierda">
			<div class="registro activo" id="registro">
				<div class="header">
					<h1>¡Crear mi cuenta!</h1>
					<p> - - - - - - - - - - - - - - - -</p>
				</div>

				<form class="formulario" id="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
					<label for="nameUser">Nombre del Usuario</label>
					<div class="contenedor-input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
						<input type="text" id="nameUser" name="nameUser" required="true">
					</div>
					<label for="nombre">Correo Electrónico</label>
					<div class="contenedor-input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
						</svg>
						<input type="email" id="emailUser" name="emailUser" required="true">
					</div>
		
					<label for="correo">Clave</label>
					<div class="contenedor-input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
						<input type="password" id="passwordUser" name="passwordUser" required>
					</div>
					
					<div class="contenedor-boton">
					<input type="submit" name="submit" value="Crear Cuenta">
					</div>
				</form>
			</div>

			<div class="header exito" id="exito">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
					<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
				</svg>
				<h1>Registrado!</h1>
				<p>Te mandaremos un correo electrónico si resultas ganador.</p>
			</div>
		</div>

		<div class="columna-derecha">

		</div>
	</div>

</body>
</html>