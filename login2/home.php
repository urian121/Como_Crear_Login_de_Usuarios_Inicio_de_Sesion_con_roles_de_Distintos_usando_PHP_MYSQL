<?php
session_start();
include('verificarDatos/config.php');
if (isset($_SESSION['email']) != "") {
    $nameUser   = $_SESSION['fullName'];
    $email      = $_SESSION['email'];
    $rolUsuario = $_SESSION['rol'];
    $idUser     = $_SESSION['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Inicio :: <?php echo $nameUser; ?></title>
  </head>
  <body>
<nav class="navbar navbar-light bg-light mb-5" style="background-color: #286efa !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://blogangular-c7858.web.app" style="color:#fff;">
      <img src="assets/images/logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
      Canal WebDeveloper
    </a>
    <span><a href="verificarDatos/cerrar.php" style="color: #fff;">Salir</a></span>
  </div>
</nav>


<div class="container">
  <div class="row text-center">
    <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
      <p>Hola ya estoy logueado, soy <strong><?php echo $nameUser; ?></strong></p>
      <p>Mi rol de usuario es <strong><?php echo $rolUsuario; ?></strong></p>
      <hr>
    </div>
  </div>
</div>



  </body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="verificarDatos/cerrar.php";
</script>
<?php }   
?>
