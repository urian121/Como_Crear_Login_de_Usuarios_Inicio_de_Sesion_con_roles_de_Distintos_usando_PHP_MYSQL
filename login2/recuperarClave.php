<?php
include('panel/config.php');

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
$paraCliente    = $correo;
$tituloCliente  = "Clave Temporal";
$titulo  = "Clave Temporal";
$mensaje = "<html>".
"<head><title>Email desde Compratucarro.net</title>".
"<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Nunito', sans-serif;
    color: #333;
    font-size: 14px;
    background:#222;
}
.contenedor{
    width: 80%;
    min-height:auto;
    text-align: center;
    margin: 0 auto;
    padding: 40px;
    background: #ececec;
    border-top: 3px solid #E64A19;
    }
    .hola{
    color:#333;
    font-size:25px;
    font-weight:bold;
    }
    img{
    margin-left: auto;
    margin-right: auto;
    display: block;
    padding:0px 0px 20px 0px;
   }
   .logo{
    width:30%;
   }
    </style></head>".
        "<body>" .
            "<div class='contenedor'>".
                "<p>&nbsp;</p>" .
                "<p>Recuerde sus Datos de acceso al portal compratucarro.net son:</p>" .
                "<p>&nbsp;</p>" .
    			"<p> Usuario ".$correo."</p>".
    			"<p> CLAVE TEMPORAL ".$clave."</p>".
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
		    "</div>" .
        "</body>" .
    "</html>";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: Bogota Colombia<info@fzapata@sgbcolombia.com >';
$enviado = mail($paraCliente, $titulo, $mensaje, $cabeceras);

?>
