<?php
session_start();
unset ($_SESSION['id']);
session_destroy();
$parametros_cookies = session_get_cookie_params();
setcookie(session_name(),0,1,$parametros_cookies["path"]);

header("Location: ../index.php");
?>