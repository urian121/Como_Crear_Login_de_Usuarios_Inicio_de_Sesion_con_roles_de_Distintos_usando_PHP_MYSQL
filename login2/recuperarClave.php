<?php
include('verificarDatos/config.php');

$logitudPass = 5;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);


$clave      = $miPassword;
$correo     = $_REQUEST['email'];
$consulta   = mysqli_query ($con, "SELECT * FROM clientes WHERE email ='".$correo."'");
$cant = mysqli_num_rows($consulta);
if($cant ==0){ 
echo "<script type='text/javascript'>
        alert('El Correo no Existe, por favor Verifique.');
        window.location='login.php';
    </script>";
}else{
$sql = ("UPDATE clientes SET password='". $clave ."' WHERE email='".$correo."' ");
$ok = mysqli_query($con,$sql); 
echo "<script type='text/javascript'>
        alert('Su clave fue cambiada, por favor revise el email y bandeja de spam.');
        window.location='login.php';
    </script>";
}


//ENVIANDO INFORMACION AL EMAIL DEL CLIENTE
$para    = $correo;
$titulo  = "Clave Temporal";
$mensaje = "
<!doctype html>
<html lang='es'>
<head>
<title>Royal Canin</title>
</head>
    <body>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div style='width: 80%; margin:0 auto; background-color: #ffffff; color: #34495e; text-align: center;font-family: sans-serif'>
            <h2 style='font-size: 16px; color: #34495e; margin: 0 0 7px;'>&#161;Felicitaciones&#33; </h2>
            <p>&nbsp;</p>
            <p>su nueva clave temporal es: ".$clave."</p>
            <p>&nbsp;</p>
            <img style='padding: 0; display: block; width:100%; max-width:600px; margin:0 auto;' src='https://blogangular-c7858.web.app/assets/images/work.gif'>
            <p>&nbsp;</p>
        </div>
    </body>
</html>
"; 

//Cabecera Obligatoria
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Bono Royal Canin <programadorphp2017@gmail.com>' . "\r\n";
$headers .= 'Cc: programadorphp2017@gmail.com' . "\r\n";

//OPCIONAR
$headers .= "Reply-To: "; 
$headers .= "Return-path:"; 
$headers .= "Cc:"; 
$headers .= "Bcc:"; 

@mail($para, $titulo, $mensaje, $headers);

?>
