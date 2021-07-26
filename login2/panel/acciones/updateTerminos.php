<?php
include('../config.php');

$terminos        = ($_POST['terminos']);


$UpdateTerm = ("
    UPDATE terminos 
        SET terminos ='$terminos'
    WHERE id='1' ");
$result = mysqli_query($con, $UpdateTerm);


header("location:../terminos.php");

?>