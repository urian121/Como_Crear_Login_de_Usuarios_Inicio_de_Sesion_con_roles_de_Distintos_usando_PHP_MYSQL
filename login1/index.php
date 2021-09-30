<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<link rel="shortcut icon" type="image/x-icon" href="assets/images/perfil.jpeg">
		<title>Login con PHP y MYSQL :: Urian Viera</title>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/cargando.css">
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/notificacion.css">
	</head>
<body class="materialdesignBackground">
		
<!-- cargando -->
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<?php
if(isset($_REQUEST['errorS'])){ 
    echo '<script>alert("Ops...! Datos Incorrectos verifique de nuevo.")</script>';
 } ?>

<?php
if(isset($_REQUEST['cc'])){ ?>
        <div class="alert show showAlert">
         <span class="msg">Felicitaciones, Sesión cerrada correctamente.</span>
      </div>
<?php } ?>
?>


<div class="myContect">
<div class="form">
<form action="verificar_sesion.php" method="POST">

    <div class="back"> 
    	<span>
    		<i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
    	</span>
    </div>
    <h3>Iniciar Sesión</h3>
    <div class="inputs"> 
      <div class="email">
        <input type="email" name="email" id="email" class="first" placeholder="Tú Email"/>
        <p class="warning"></p>
        <button class="next">Siguiente</button>
      </div>


      <div class="password">
        <input type="password" name="password" id="password" class="second" placeholder="Tú Clave" required="true"/>
        <button type="submit" class="login">ENTRAR AHORA</button>
      </div>
    </div>
  </form>
</div>

</div>



<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $(window).load(function() {
	    $(".cargando").fadeOut(1000);
	  });  

    setTimeout(function(){
        //$('.alert').addClass("hide");
        $(".alert").fadeOut(100);
       },5000);
});


</script>

</body>
</html>	