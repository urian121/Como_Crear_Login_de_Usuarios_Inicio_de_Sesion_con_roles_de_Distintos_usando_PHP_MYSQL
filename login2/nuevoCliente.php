<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Compratucarro.net</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Compratucarro.net es una empresa joven que ha incursionado en el sector automotriz en el marcado Nacional con una oferta presencial y virtual de vehiculos automotores."/>
  <meta name="keywords" content="Compratucarro.net es una empresa joven que ha incursionado en el sector automotriz en el marcado Nacional con una oferta presencial y virtual de vehiculos automotores."/>
  <meta name="author" content="Compratucarro.net es una empresa joven que ha incursionado en el sector automotriz en el marcado Nacional con una oferta presencial y virtual de vehiculos automotores."/>
  <meta name="copyright" content="Compratucarro.net es una empresa joven que ha incursionado en el sector automotriz en el marcado Nacional con una oferta presencial y virtual de vehiculos automotores."/>
  <meta name="language" content="es-CO"/>
  <meta http-equiv="content-language" content="es-co"/>
  <meta name="distribution" content="global"/>
  <meta name="resource-type" content="document"/>
  <meta name="Audience" content="All" />
  <meta name="robots" content="index,follow"/>
  <meta name="googlebot-image" content="index"/>
  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/login_regist.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  </head>
  <body>
  
  <div class="site-loader"></div>

 <?php 
    include('menutwo.php');
 ?> 

<br><br>
<br>



        <div class="container bg-light mt-5"> 
            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-12">

                        <div class="form">
                            <h4 class="text-center" style="color: #FE642E; font-weight: 700;">
                            CREAR MI CUENTA</h4>
                            <hr>

                <div id="preguntando">
                <div id="cliente">
                <form  action="recib_nuevoCliente.php" method="post">
                        <div class="field-wrap">
                            <label>Nombre y Apellido</label>
                            <input type="text" name="fullName" required="true" id="mayus" autocomplete="off" />
                        </div>
                    <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Celular</label>
                            <input type="number" name="phone" required="true" autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label>Correo</label>
                        <input type="email" name="email" required="true" autocomplete="off"/>
                    </div>
                     <div class="field-wrap">
                        <div class="field-wrap">
                            <label>Escriba una clave cualquiera</label>
                            <input type="password" name="password" required="true" autocomplete="off" />
                        </div>
                    </div>
                    <p class="forgot">
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" name="terminos" id="terminos" checked>
                                </td>
                                <td>
                                <a href="TRATAMIENTO_DE_DATOS_Y_RELACION_COMERCIAL.pdf" download="TRATAMIENTO_DE_DATOS_Y_RELACION_COMERCIAL" download="Terminos" id="text_terminos">
                                    Acepta los Téminos y Condiciones.</a>
                                </td>
                            </tr>
                        </table>
                    </p>

                        <a href="login.php" title="Volver" style="float: left; color: blue;">
                           <i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i> Atrás
                        </a>

                    <button type="submit" class="button button-block"> CREAR MI CUENTA AHORA</button>
                </form>
            </div>
            </div>  



                  


        </div>
    </div>
  </div>
 </div>   
</div>

<br><br>



  <?php include('footer.php'); ?>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scroll.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/main.js"></script>

<script type="text/javascript">
$(document).ready(function () {
$("#notificacion").delay(500).slideDown("slow");
function cerrarNotificacion() {
    $("#notificacion").click(function () {
        $(this).slideUp("fast");
    });
}
$(".cerrar").click(cerrarNotificacion);

setTimeout(function () {
    $("#notificacion").fadeOut(1000);
}, 30000);

});
</script>
<script type="text/javascript">
 $('#recuperarclave').hide(); 
 $('#signup').hide();


$('#sesion').on('click', function() {
    $('#preguntando').hide(); //para ocultar
    $("#signup").fadeIn("slow"); //mostrar
});

$('#volverOne').on('click', function() {
    $("#preguntando").fadeIn("slow"); //mostrar
    $('#signup').hide(); //para ocultar
});


$('#olvidar').on('click', function() {
    $('#signup').hide(); //para ocultar
    $("#recuperarclave").fadeIn("slow"); //mostrar
});

$('#volver').on('click', function() {
    $('#recuperarclave').hide(); //para ocultar
    $("#signup").fadeIn("slow"); //mostrar
});
</script>

    
  </body>
</html>