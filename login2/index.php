<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Compratucarro.net</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login_regist.css">

    <style type="text/css">
    .backgroundFondo{
    background: url('images/fondo.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>
  </head>
  <body class="backgroundFondo">


        <div class="container"> 
            <div class="world-latest-articles">
                <div class="row">
                  <div class="col-12 col-lg-12">

                  <div class="form">
                    <div id="signup">
                        <h1 class="text-center" style="color: #333; font-weight: bold;">Iniciar Sesión</h1>
                        <form action="panel/verificar_sesion.php" method="post">
                            <div class="field-wrap">
                                <label>Correo</label>
                                <input type="email" name="email" required autocomplete="off"/>
                            </div>
                            <div class="field-wrap">
                                <label>Contraseña</label>
                                <input type="password" name="password" required autocomplete="off"/>
                            </div>
                            <br>
                            <input  style="background-color:#d21f22; !important;" type="submit" class="button button-block mb-4" value="ENTRAR"/>

                             <a href="#" id="volverOne" title="Volver" style="float: left; color: #333;">
                                    Crear Cuenta..!
                                </a>

                                <a href="#" id="olvidar" title="Recuperar Clave" style="float: right; color:#1f3c88;">
                                    Recuperar Clave
                                </a>
                            <br><br>    
                              
                        </form>
                    </div>


                    <div id="recuperarclave">
                        <h1 class="text-center mb-5" style="color: #333; font-weight: bold;">
                        Recuperar tu Clave</h1>
                        <form action="recuperarClave.php" method="post">
                            <div class="field-wrap">
                                <label>Correo</label>
                                <input type="email" name="email" required autocomplete="off"/>
                            </div>
                            
                            <br>
                        <a href="#" id="volver" title="Volver" style="float: right; color: #333;">Volver</a>
                        <br><br> 
                              <input style="background-color:#d21f22 !important;" type="submit" class="button button-block" value="RECUPERAR CLAVE"/>
                              <br><br>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>   
</div>




<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
 $('#recuperarclave').hide(); 

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