<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
	include('conexion/config.php');
	$emailUser 		 = trim($_REQUEST['emailUser']);
	$passwordUser    = trim($_REQUEST['passwordUser']);
	$nameUser  		 = $_REQUEST['nameUser'];
	date_default_timezone_set("America/Bogota");
	$createUser              = date("Y-m-d H:i:A");

	$PasswordHash = password_hash($passwordUser, PASSWORD_BCRYPT); //Incriptando clave,
	//crea un nuevo hash de contraseña usando un algoritmo de hash fuerte de único sentido.

	/*funcion para capturar la ip del Usuario Logueando*/
	function getVisitorIp()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   
		{
			$ipAdress = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
		{
			$ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ipAdress = $_SERVER['REMOTE_ADDR'];
		}
		return $ipAdress;
	}
 $ipUser = getVisitorIp();


 //generar un token o variable aleatoria
 function TokenAleatorio($length = 50) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$miToken  = TokenAleatorio();

 	//Primero verifico si existe algun usuario asociado a dicho correo
 	$SqlVerificandoEmail = ("SELECT emailUser FROM myusers WHERE emailUser COLLATE utf8_bin='$emailUser'");
	$jqueryEmail         = mysqli_query($con, $SqlVerificandoEmail); 
	if(mysqli_num_rows($jqueryEmail) >0){
		//Ya existe el correo
		header("location:formLogin.php?errorC=".$miToken);
	}else{
		$queryInsertUser  = ("INSERT INTO myusers(emailUser,passwordUser, nameUser,ipUser,createUser) VALUES ('$emailUser','$PasswordHash','$nameUser','$ipUser','$createUser')");
		$resultInsertUser = mysqli_query($con, $queryInsertUser);
		header("location:index.php?fineS=".$miToken);
	}
}
?>