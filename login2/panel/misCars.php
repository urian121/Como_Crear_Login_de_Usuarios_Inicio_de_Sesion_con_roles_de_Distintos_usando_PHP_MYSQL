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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link   href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
  
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


  <?php
  if($privilegio >1){
   $sqlProducts = ("
      SELECT
        fotocars.*, carros.*
      FROM carros, fotocars  
      WHERE 
      carros.id=fotocars.carro_id
      GROUP BY carros.id
    ");
    $queryProducts = mysqli_query($con, $sqlProducts);
    $totalCarts    = mysqli_num_rows($queryProducts);
  }else{


  $sqlProducts = ("
    SELECT
      fotocars.*, carros.*
    FROM carros, fotocars  
    WHERE 
    carros.id=fotocars.carro_id
    AND carros.cliente_id='".$idUser."'
    GROUP BY carros.id
  ");
  $queryProducts = mysqli_query($con, $sqlProducts);
  $totalCarts    = mysqli_num_rows($queryProducts);
}
  ?>

    <!---Lista de  Categorias --->
      <div class="main-panel">
        <div class="content-wrapper">

          <?php include('msj.php'); ?>

          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <h4 class="card-title text-center">
                    Lista de mis Vehículos 
                    <strong>(<?php echo $totalCarts; ?>)</strong></h4>
                  
                  <div class="table-responsive">
                    <table id="datatables-example" class="table table-hover">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Marca</th>
                          <th>Referencia</th>
                          <th>Precio</th>
                          <th>Modelo</th>
                          <th>Foto 1</th>
                          <th>Ubicación</th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while ($dataProduct = mysqli_fetch_array($queryProducts)) { ?>
                        <tr>
                          <td>
                            <?php echo '0'.$dataProduct['id']; ?>
                          </td>
                          <td><?php echo $dataProduct['marca']; ?></td>
                          <td><?php echo $dataProduct['namecar']; ?></td>
                          <td><?php echo $dataProduct['precio']; ?></td>
                          <td><?php echo $dataProduct['year']; ?></td>
                          <td>
                            <img src="<?php echo $dataProduct["foto1"]; ?>" alt="Foto_Car">
                          </td>
                          <td><?php echo $dataProduct['address']; ?></td>
                          <td>
                            <a target="_blank" href="https://compratucarro.net/details.php?idCar=<?php echo $dataProduct['id']; ?>"  class="btn btn-warning">Ver Carro</a>
                            <a href="updateCar.php?idCar=<?php echo $dataProduct['id']; ?>" class="btn btn-success">Actualizar
                            </a>
                            <?php 
                            if($privilegio >1){ ?>
                              <a href="acciones/deletCar.php?idCar=<?php echo $dataProduct['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el Carro?');">
                                Borrar
                            </a>
                          <?php } ?>
                            
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


    </div>
  </div>


<?php include('js.html'); ?>

<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/jquery.datatables.min.js"></script> <!---indispensable-->
<script type="text/javascript" src="js/datatables.bootstrap.min.js"></script> <!--no es tan necesario -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatables-example').DataTable();
    });
</script>

</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
