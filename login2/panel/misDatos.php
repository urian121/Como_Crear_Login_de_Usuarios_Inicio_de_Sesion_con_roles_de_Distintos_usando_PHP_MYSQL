<?php
session_start();
include('config.php');
if (isset($_SESSION['email']) != "") {
    $nameUser   = $_SESSION['fullName'];
    $email      = $_SESSION['email'];
    $privilegio = $_SESSION['rol'];
    $idUser     = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Compratucarro.net :: Panel</title>
  <?php include('css.html'); ?>
  <style type="text/css" media="screen">
    .sidebar ul li a{
      color: #606060 !important;
      font-weight: 600 !important;
    }
    ul li a:hover{
      color: #333 !important;
    }
  </style>
</head>
<body>
  <?php include('cargando.html'); ?>

  <div class="container-scroller">

     <?php include('menuHorizontal.php'); ?>

    <div class="container-fluid page-body-wrapper">

    <?php include('menuVertical.php'); ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <?php include('msj.php'); ?>

   <?php 
        $sqlUser = ("SELECT * FROM clientes WHERE id='".$idUser."'");
        $queryUser = mysqli_query($con, $sqlUser);
        $DataUser  = mysqli_fetch_array($queryUser);
    ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Mi información personal</h4>
                  <hr><br>
                
                <form action="PerfilUser.php" method="POST" class="form-sample">
                  <input type="hidden" name="idUser" value="<?php echo $idUser; ?>">
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="fullName">Nombre y Apellido</label>
                          <input type="text" name="fullName" value="<?php echo $DataUser['fullName']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" value="<?php echo $DataUser['email']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputName1">Clave</label>
                          <input type="text" name="password" value="<?php echo $DataUser['password']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputName1">Whatsapp para pedidos</label>
                          <input type="number" name="phone" value="<?php echo $DataUser['phone']; ?>" class="form-control" require="true"/>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputName1">Sexo</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="sexo" class="form-check-input" value="Masculino"<?php if ($DataUser['sexo'] == 'Masculino'): ?> checked <?php  endif; ?> >
                                Masculino
                              </label>
                            </div>

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="sexo" class="form-check-input"  value="Femenino"<?php if ($DataUser['sexo'] == 'Femenino'): ?> checked <?php  endif; ?> >
                                Femenino
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br><br>
                    <div class="row text-center">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mr-2">Guardar Cambios</button>
                        <a href="home.php" class="btn btn-light"  id="bt-cancelar"> Cancelar</a>
                      </div>
                    </div>

                </form>

            </div>
          </div>
        </div>
      


        </div>
      </div>
    </div>
  </div>


<?php include('js.html'); ?>

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
