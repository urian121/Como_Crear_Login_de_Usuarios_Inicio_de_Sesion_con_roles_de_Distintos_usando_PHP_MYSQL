<?php
require_once('../config.php');

$id    			= $_REQUEST['id'];
$desde			= $_REQUEST['desde'];

if ($desde =='category') {
	//echo "category";
	$sqlDeleteCateg = ("DELETE FROM categorias WHERE  id='" .$id. "'");
	$resultCateg = mysqli_query($con, $sqlDeleteCateg);

	header("Location:../list_category_etiquetas.php?dc=dc");
	exit();
}else{
	//echo "etiqueta";
	$sqlDeleteEtiq = ("DELETE FROM etiquetas WHERE  id='" .$id. "'");
	$resultEtique = mysqli_query($con, $sqlDeleteEtiq);

	header("Location:../list_category_etiquetas.php?de=de");
	exit();
}


?>
  