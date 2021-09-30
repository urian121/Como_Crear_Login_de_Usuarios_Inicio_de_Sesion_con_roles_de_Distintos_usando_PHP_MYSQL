<?php
error_reporting(0);
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    header("Location: ../home.php");
}


$correo 		= $_REQUEST['email'];
$clave  		= $_REQUEST['password'];

$sqlVerificando = ("SELECT * FROM logintwo WHERE email='".$correo."' AND password='".$clave."' ");
$QueryResul = mysqli_query($con,$sqlVerificando);

if ($row = mysqli_fetch_assoc($QueryResul)) {
	 $_SESSION['fullName']	= $row['fullName'];
	 $_SESSION['email'] 	= $row['email'];
	 $_SESSION['id']		= $row['id'];
	 $_SESSION['rol']		= $row['rol'];
	
	echo '<meta http-equiv="refresh" content="0;url=../home.php">';
}else{
	echo '<meta http-equiv="refresh" content="0;url=../index.php">';
}
?>