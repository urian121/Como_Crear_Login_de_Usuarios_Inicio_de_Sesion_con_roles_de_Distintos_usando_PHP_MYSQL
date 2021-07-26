<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
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
<link rel="stylesheet" type="text/css" href="css/cargando.css">
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

<?php include('msj.php'); 

$idCar       = $_REQUEST['idCar']; /**Id del producto*/
$sqlCar = ("SELECT fotocars.*, carros.* FROM carros, fotocars  WHERE carros.id=fotocars.carro_id AND carros.id='".$idCar."' ");
$queryCar = mysqli_query($con, $sqlCar);
$DataCar  = mysqli_fetch_array($queryCar);

?>

<div class="row">
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body dashboard-tabs p-0">
<div class="tab-content py-0 px-0">


  <div class="d-flex flex-wrap justify-content-xl-between">
    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
  
      <div class="card-body">
        <a href="misCars.php" title="volver">
          <i class="mdi mdi-arrow-left"></i>
        </a>
        <h3 class="text-center">Editar Información del Vehículo</h3>
          <hr><br>
      <form action="tabs/recibUpdateCar.php" method="POST" class="form-sample" enctype="multipart/form-data">
          <input type="hidden" name="idCar" value="<?php echo $DataCar['id'];; ?>">
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="marca">Marca</label>
                  <input type="text" name="marca" value="<?php echo $DataCar['marca']; ?>" class="form-control" require/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="namecar">Referencia del carro <em>Nombre</em></label>
                  <input type="text" name="namecar" value="<?php echo $DataCar['namecar']; ?>" class="form-control" require/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="year">Año (Modelo)</label>
                  <input type="number" name="year" value="<?php echo $DataCar['year']; ?>" class="form-control" require="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="cc">Centímetros Cubicos</label>
                  <input type="number" name="cc" value="<?php echo $DataCar['cc']; ?>" class="form-control"/>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-2">
              <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="text" name="precio" value="<?php echo $DataCar['cc']; ?>" class="form-control" require="true"/>
                </div>
              </div>
            <div class="col-md-2">
            <div class="form-group">
                <label for="placa">Placas</label>
                <input type="text" name="placa" value="<?php echo $DataCar['placa']; ?>" class="form-control" require="true"/>
              </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                <label for="city_matricula">Ciudad de Matrícula</label>
                <input type="text" name="city_matricula" class="form-control" value="<?php echo $DataCar['city_matricula']; ?>"/>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" value="<?php echo $DataCar['color']; ?>" class="form-control" require="true"/>
              </div>
            </div>
             <div class="col-md-2">
              <div class="form-group">
                <label for="km">Kilometraje</label>
                <input type="text" name="km" value="<?php echo $DataCar['km']; ?>"class="form-control" require="true"/>
              </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                <label for="puertas">Puertas</label>
                <select name="puertas" class="form-control">
                <option value="1" <?php if ($DataCar['puertas']=="1") {
                      echo 'selected';
                  } ?> >1</option>

                  <option value="2" <?php if ($DataCar['puertas']=="2") {
                      echo 'selected';
                  } ?> >2</option>

                  <option value="3" <?php if ($DataCar['puertas']=="3") {
                      echo 'selected';
                  } ?> >3</option>

                  <option value="4" <?php if ($DataCar['puertas']=="4") {
                      echo 'selected';
                  } ?> >4</option>

                  <option value="5" <?php if ($DataCar['puertas']=="5") {
                      echo 'selected';
                  } ?> >5</option>
                  </select>
              </div>
            </div>
          
            <div class="col-md-2">
            <div class="form-group">
                <label for="combustible">Combustible</label>
                <select name="combustible" class="form-control">
                <option value="Gasolina" <?php if ($DataCar['combustible']=="Gasolina") {
                      echo 'selected';
                  } ?> >Gasolina</option>

                  <option value="Diesel" <?php if ($DataCar['combustible']=="Diesel") {
                      echo 'selected';
                  } ?> >Diesel</option>

                  <option value="Hidrógeno" <?php if ($DataCar['combustible']=="Hidrógeno") {
                      echo 'selected';
                  } ?> >Hidrógeno</option>

                  <option value="Eléctrico" <?php if ($DataCar['combustible']=="Eléctrico") {
                      echo 'selected';
                  } ?> >Eléctrico</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                <label for="transmition">Transmisión</label>
                <select name="transmition" class="form-control">
                <option value="Automática" <?php if ($DataCar['transmition']=="Automática") {
                      echo 'selected';
                  } ?> >Automática</option>

                  <option value="Mecánica" <?php if ($DataCar['transmition']=="Mecánica") {
                      echo 'selected';
                  } ?> >Mecánica</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
                <label for="cant">Ciudad <em style="color: red !important;">(Donde sé encuentra el carro)</em></label>
                <input type="text" name="address" value="<?php echo $DataCar['address']; ?>" class="form-control" require="true"/>
              </div>
            </div> 

            <div class="col-md-2">
            <div class="form-group">
                <label for="cant" style="color: red !important;">Cantidad Fotos</label>
                <input type="text" name="cant" value="<?php echo $DataCar['cant']; ?>"class="form-control" require="true"/>
              </div>
            </div>
                       
          </div>

          <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="description">Descripción del Carro</label>
              <textarea name="description" class="form-control" rows="8"><?php echo $DataCar['description']; ?></textarea>
            </div>
          </div>
        </div>



            <br>
            <h5 class="text-center" style="background-color:#ccc; padding: 15px 0px">
              Carga Fotos del Carro (Use imágenes solo PNG o JPG)
            </h5>
            <hr><br>

            <div class="row">
                <?php
                for ($i=1; $i <=10; $i++) { 
                      $Fotos = ($DataCar["foto" . $i]);
                      $fileExtension = substr(strrchr($Fotos, '.'), 1); 

                      if ($fileExtension !="") { ?>
                        
                       <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xs-6">
                          <div class="form-group">
                            <div class='upload-field-customized'>
                              <h5 class="text-center cambiarImg" style="color:red; background-color:#ccc; padding: 15px 0px">
                              <i class="zmdi zmdi-edit"></i> Cambiar Imágen
                              </h5>
                              <input type="file" name="foto<?php echo $i; ?>"  accept="image/*" title="Foto <?php echo $i; ?>">
                          </div>
                            <img src="<?php echo $DataCar["foto".$i]; ?>" id="specialImgUpdate">
                          </div>
                        </div>

                    <?php }else{ ?>
                      <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xs-6">
                          <div> 
                              <label class="dropimage profile">
                                <input type="file" name="foto<?php echo $i; ?>"  accept="image/*" title="Foto <?php echo $i; ?>" require>
                              </label>
                        </div>
                    </div>
                    <?php } }  ?>
              </div>


            <br><br>
            <div class="row text-center">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary mr-2">Guardar Modificaciones</button>
                <a href="misCars.php" class="btn btn-light" id="bt-cancelar"> Cancelar</a>
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


<?php include('js.html'); ?>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
[].forEach.call(document.querySelectorAll('.dropimage'), function(img){
img.onchange = function(e){
var inputfile = this, reader = new FileReader();
reader.onloadend = function(){
inputfile.style['background-image'] = 'url('+reader.result+')';
}
reader.readAsDataURL(e.target.files[0]);
}
});
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
