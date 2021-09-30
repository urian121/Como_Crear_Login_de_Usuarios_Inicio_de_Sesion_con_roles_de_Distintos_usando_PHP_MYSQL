<?php
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    $nameUser   = $_SESSION['fullName'];
    $email      = $_SESSION['email'];
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
      <img src="images/perfil.jpeg" alt="" width="40" height="40" class="d-inline-block align-text-top">
      Canal WebDeveloper
    </a>
    <span><a href="cerrar.php" style="color: #fff;">Salir</a></span>
  </div>
</nav>


<div class="container">

<?php
if(isset($_REQUEST['c'])){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Felicitaciones!</strong> Acaba de iniciar sesión correctamente..
  </div>
<?php } ?>


  <div class="row text-center">
    <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
      <p>Hola ya estoy logueado, soy <strong><?php echo $nameUser; ?></strong></p>
      <p>Mi correo es <strong><?php echo $email; ?></strong></p>
      <hr>
    </div>
  </div>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
