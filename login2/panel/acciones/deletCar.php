<?php
require_once('../config.php');

$id    		= $_REQUEST['idCar']; /**Id del producto*/

$sqlDeleteProd = ("DELETE FROM carros WHERE  id='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteProd);

if ($resultProd) {
	$sqlDeleteFot = ("DELETE FROM fotocars WHERE  idFot ='" .$id. "'");
	$resultFot = mysqli_query($con, $sqlDeleteFot);
}
/**dpf = borraddo del producto mas sus fotos**/
header("Location:../misCars.php?dpf=dpf");
exit();

?>
  