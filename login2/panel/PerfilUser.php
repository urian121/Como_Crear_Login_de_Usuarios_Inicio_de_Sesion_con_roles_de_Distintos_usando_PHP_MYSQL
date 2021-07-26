<?php
require("config.php");

$idUser = $_REQUEST['idUser'];
$UpdateUser = ("UPDATE clientes SET
	fullName	='".$_POST['fullName']."',
	sexo		='".$_POST['sexo']."',
	email		='".$_POST['email']."',
	password	='".$_POST['password']."',
	phone		='".$_POST['phone']."' 

WHERE id='".$idUser."'");
$ResultadoUpdate = mysqli_query($con, $UpdateUser);

header("Location:misDatos.php?du=du");
?>