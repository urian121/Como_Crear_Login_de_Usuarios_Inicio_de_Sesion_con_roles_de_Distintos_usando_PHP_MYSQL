<?php
session_start();
require("panel/config.php");
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
$fechaRegistro = date('d-m-Y');


$fullName  	= $_REQUEST['fullName'];
$email 	    = $_REQUEST['email'];
$password  	= $_REQUEST['password'];
$phone      = $_REQUEST['phone'];
$rol		= 1;

$consulta = ("SELECT * FROM clientes WHERE email = '".$email."'");
$res      = mysqli_query($con, $consulta);
$cant     = mysqli_num_rows($res);

if($cant > 0){
    header("Location:login.php?cex=cex");
}
else {
$query = "INSERT INTO clientes(
	fullName,
	email,
	password,
    phone,
	rol,
	fechaRegistro
	)
VALUES (
	'" .$fullName. "',
	'" .$email. "',
	'" .$password. "',
    '" .$phone. "',
	'" .$rol. "',
	'" .$fechaRegistro. "'
)";
$result = mysqli_query($con, $query);



//Enviando Email de Bienvenida
$paraCliente    = $email;
$tituloCliente  = "Bienvenido ha compratucarro.net";
$mensajeCliente = "<html>".
    "<head><title>compratucarro.net</title>".
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
    a:hover{
    text-decoration: underline !important;
    opacity: 0.8;
    }
    #enlaceboton{
    background-color: #c63411;
    border: #c63411;
    color: white;
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 25px;
    }
    #center{
    text-align: center;
    color:#333;
    }
    #sizeletra{
     font-weight:bold;
     font-size:25px;
     color:#333;
    }
    #bold{
     font-weight:bold;
    }

</style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span id='sizeletra'>Felicitaciones !</strong></span>" .
                "<p>&nbsp;</p>" .
                "<span> <strong class='hola'>" .$fullName."</strong></span>" .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p id='center'>Tu cuenta fue creada correctamente en nuestro portal web compratucarro.net</p>" .
                "<p>&nbsp;</p>" .
                "<p id='center bold'>¡ Recuerda tu Usuario: <strong>" .$email."</strong> y Clave para acceder a la plataforma es: <strong> " .$password." </strong></p>" .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p>¡Gracias por preferirnos!</p>" .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .

            "</div>" .
        "</body>" .
"</html>";

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: Compratucarro.net <fzapata@sgbcolombia.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);



//Inicio session del Nuevo cliente
$sqlVerificando = ("SELECT * FROM clientes WHERE email='".$email."' AND password='".$password."' ");
$QueryResul = mysqli_query($con,$sqlVerificando);

if ($row = mysqli_fetch_assoc($QueryResul)) {
     $_SESSION['fullName']  = $row['fullName'];
     $_SESSION['email']     = $row['email'];
     $_SESSION['id']        = $row['id'];
     $_SESSION['rol']       = $row['rol'];
     
    
    echo '<meta http-equiv="refresh" content="0;url=panel/home.php">';
}
}

    //header("Location:index.php?ce=ce");
?>