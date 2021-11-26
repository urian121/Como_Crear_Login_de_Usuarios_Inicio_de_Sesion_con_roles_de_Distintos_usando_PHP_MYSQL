<?php
//if($_SERVER['REQUEST_METHOD'] == "POST"){
	include('conexion/config.php');


	$emailUser 		    = $_REQUEST['emailUser'];
	echo $passwordUser  = ($_REQUEST['passwordUser']);
	echo $hash_pass = password_hash($passwordUser, PASSWORD_BCRYPT);
/*
El problema está en lo COLLATE que tiene en la base de datos latin1 para ese campo.
Tienes 2 opciones; el primero es realizar la consulta sin collate:
La segunda opción es modificar el COLLATE de esos campos:
https://bugs.mysql.com/bug.php?id=71939
ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
*/
//ALTER DATABASE MyDataBase COLLATE utf8_bin

//$sqlVerificando = ("SELECT * FROM myusers WHERE emailUser COLLATE utf8_bin='".$emailUser."' AND passwordUser COLLATE utf8_bin='".$passwordUser."' ");



<!-----
https://docs.php.earth/security/passwords/
https://hotexamples.com/es/examples/-/-/password_verify/php-password_verify-function-examples.html
https://www.tutorialspoint.com/php/php_function_password_verify.htm
https://www.sitepoint.com/community/t/problems-with-php-login-code-validation-and-password-verify-function/338239
https://newbedev.com/php-php-login-if-password-verify-hash-code-example
https://phpcoder.tech/php-password_hash-password_verify-with-example/

https://stackhowto.com/php-password-hash-password-verify-with-example/

--->

$sqlVerificando = ("SELECT * FROM myusers WHERE emailUser COLLATE utf8_bin='$emailUser'");
$QueryResul = mysqli_query($con,$sqlVerificando);
echo $CantResultadoSql = mysqli_num_rows($QueryResul);

if ($CantResultadoSql == 1){
	while($dataRow = mysqli_fetch_assoc($QueryResul)){
		echo $dataRow['passwordUser'];
	if (password_verify($passwordUser, $hash_pass)){ 
		session_start();
		$_SESSION['nameUser']	= $dataRow['nameUser'];
		$_SESSION['emailUser'] 	= $dataRow['emailUser'];
		$_SESSION['IdUser ']	= $dataRow['IdUser'];
		//Todo esta correcto
		echo 'bien';
		//echo '<meta http-equiv="refresh" content="0;url=home.php?c=1">';
	}else{
	//Datos incorrectos
	echo 'Mal';
		//echo '<meta http-equiv="refresh" content="0;url=index.php?errorS=1">';
	}
  }
} 

//}




?>