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


.imgEditBanner{
  width: 100%;
 /* width: 200px;
  height: 200px;*/
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
/*** SQL logo */
/* $sqlLogo   = ("SELECT * FROM logo WHERE cliente_id='".$idUser."'");
$queryLogo = mysqli_query($con, $sqlLogo);
$DataLogo  = mysqli_fetch_array($queryLogo);
*/

/**Sql Banner */

$sqlBanner   = ("SELECT * FROM banners");
$queryBanner = mysqli_query($con, $sqlBanner);

?>

  <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">ACTUALIZAR IMAGENES DEL BANNER</h4>
            <hr><br>
            <p style="float: right; font-weight: 600;"> 
              <a style="background-color: orange; padding: 8px 50px; color: #fff !important;" href="https://compratucarro.net/" target="_blank" title='Ver mi Web' >Ver Web</a>
            </p>
            <br><br>


          <div class="row text-center">
           <?php
            while ($DataBanner = mysqli_fetch_array($queryBanner)) {
             for($b=1; $b<=6; $b ++){ ?>
              
              <div class="col-12 col-md-4" style="border-right: 1px solid #ccc;">
                  <div class="form-group">
                    <h5 class="text-center" id="titleLogo">Banner 1</h5>
                    <img src="../<?php echo $DataBanner['banner'.$b]; ?>" alt="Banner 1" class="imgEditBanner">

                  <form name="MiformbannerOne<?php echo $b; ?>" id="MiformbannerOne<?php echo $b; ?>" method="post" enctype="multipart/form-data">
                    <div class="upload-field-customized imgbanner"> 
                        <input type="file"  id="banner" name="banner<?php echo $b; ?>" data-id="<?php echo $b; ?>"  accept="image/*" title="Mi Banner <?php echo $b; ?>"/>
                        <span style="background-color:#999;">Cambiar</span>
                    </div>
                  </form>
                  </div>
              </div>
          <?php } } ?>

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
  $('.imgbanner').on('change', '#banner', function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('form')[0]);
    var idBanner = $(this).data("id");
  
    var URLactual   = window.location;

    $.ajax({
        url: 'acciones/updateBanner.php',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },

       data: $("#MiformbannerOne" +idBanner).serialize(), 
        success: function(data){
        //$("#ban").html(data); 
        $("#MiformbannerOne" + idBanner)[0].reset();
        //location.href="header.php?b1=b1"; 
        $(location).attr('href',URLactual); 
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
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
