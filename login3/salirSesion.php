<?php
session_start();
unset ($_SESSION['id']);
session_destroy();
$parametros_cookies = session_get_cookie_params();
setcookie(session_name(),0,1,$parametros_cookies["path"]);

date_default_timezone_set("America/Bogota");
$sesionHasta   = date("Y-m-d H:i:A");

$email = $_REQUEST['email'];
$Update = ("UPDATE myusers SET sesionHasta='$sesionHasta' WHERE emailUser='$email' ");
$resultado = mysqli_query($con, $Update);

header("Location: index.php?cc=1");
?>