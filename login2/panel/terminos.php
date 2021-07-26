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
  <link rel="stylesheet" type="text/css" href="css/picnic.min.css">
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
          
          <?php 
          include('msj.php');
            $sqlTerminos = ("SELECT * FROM terminos ");
            $queryTerminos = mysqli_query($con, $sqlTerminos);
            $DataTermino   = mysqli_fetch_array($queryTerminos);
          ?>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  
                  <div class="tab-content py-0 px-0">
                    
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-betcity_matriculaween">
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <div class="card-body">
                          <h2 class="text-center">Términos de Registro</h2>
                              <hr><br>
                            <form action="acciones/updateTerminos.php" method="POST" class="form-sample" enctype="multipart/form-data">          

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="terminos">Términos</label>
                                      <textarea name="terminos" class="form-control" rows="6"><?php echo $DataTermino['terminos']; ?></textarea>
                                    </div>
                                  </div>
                                </div>

                                <br><br>
                                <div class="row text-center">
                                  <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-icon-text btn-block">
                                      <span class="mdi mdi-file-check btn-icon-prepend"></span>
                                      Guardar Cambios</button>
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
