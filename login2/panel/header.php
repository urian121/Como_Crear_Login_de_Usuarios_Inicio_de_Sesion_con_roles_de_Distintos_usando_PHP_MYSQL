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
  <link rel="stylesheet" href="css/editar_menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
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
  /*** SQL logo */
  $sqlLogo   = ("SELECT * FROM logo WHERE cliente_id='".$idUser."'");
  $queryLogo = mysqli_query($con, $sqlLogo);
  $DataLogo  = mysqli_fetch_array($queryLogo);

  /**Sql Menu */
  $sqlMenu   = ("SELECT * FROM menu WHERE cliente_id='".$idUser."'");
  $queryMenu = mysqli_query($con, $sqlMenu);
  $DataMenu  = mysqli_fetch_array($queryMenu);

  /**Sql Banner */
  $sqlBanner   = ("SELECT * FROM banner WHERE cliente_id='".$idUser."'");
  $queryBanner = mysqli_query($con, $sqlBanner);
  $DataBanner  = mysqli_fetch_array($queryBanner);
  ?>

        <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                <div class="row" style="background-color: #fcfcfc;">
                  <div class="col-md-6">
                    <form id="Miform" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $idUser; ?>">
                        <div class="divlogo">
                          <span id="conteLogo">
                            <img src="<?php echo $DataLogo['logo']; ?>" alt="Logo">
                            <input type="file" name="logo" id="logo"  accept="image/*" title="Mi Logo">
                          </span>
                          <a href="#" class="btn-link btn-fw">
                            <i class="zmdi zmdi-border-color btnlogo"></i>
                          </a>
                      </div>
                      <p style="padding:5px 0px 5px 80px; width:200px; color:#fff; background:#666; font-weight:600;">Logo</p>
                    </form>
                    </div>

                  <?php
                  $linkUno=1;
                  $linkDost=2;
                  $titleBanner=3;
                  ?>
                  <div class="col-md-3 edit">
                  <div class="entrar<?php echo $linkUno; ?>">
                      <h4 class="editable<?php echo $linkUno; ?>" id="linkOne" style="line-height:5 !important;">
                        <?php echo $DataMenu['linkOne']; ?>
                    </h4>
                  </div> 
                      <div class="barra">
                        <a href="#" class="editar edit btn_edit<?php echo $linkUno; ?>" id="<?php echo $linkUno; ?>">
                            <i class="zmdi zmdi-edit"> </i>
                            EDITAR
                        </a>
                        <a href="#" class="editar save guardar<?php echo $linkUno; ?>" id="<?php echo $linkUno; ?>" style="display: none;">
                            <i class="zmdi zmdi-refresh-sync"> </i>
                            GUARDAR
                        </a>
                    </div>
                  </div>

                  <!---link Dos --->
                  <div class="col-md-3 edit">
                  <div class="entrar<?php echo $linkDost; ?>">
                    <h4 class="editable<?php echo $linkDost; ?>" id="linkTwo" style="line-height:5 !important;">
                      <?php echo $DataMenu['linkTwo']; ?>
                    </h4>
                  </div>
                    <div class="barra">
                        <a href="#" class="editar edit btn_edit<?php echo $linkDost; ?>" id="<?php echo $linkDost; ?>">
                            <i class="zmdi zmdi-edit"> </i>
                            EDITAR
                        </a>
                        <a href="#" class="editar save guardar<?php echo $linkDost; ?>" style="display: none;" id="<?php echo $linkDost; ?>">
                            <i class="zmdi zmdi-refresh-sync"> </i>
                            GUARDAR
                        </a>
                    </div>
                    </div>
                </div>
                <hr><br>


                <!---Banner ---->
                <div class="row text-center">
                  <div class="col-md-4">

                    <form id="MiformBanner" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $idUser; ?>">
                        <div class="divBanner">
                          <span id="conteBanner">
                            <img src="<?php echo $DataBanner['bannerOne']; ?>" alt="Banner 1">
                            <input type="file" name="bannerOne" id="bannerOne"  accept="image/*" title="Mi Banner 1">
                          </span>
                          <a href="#" class="btn-link btn-fw">
                            <i class="zmdi zmdi-border-color btnbanner"></i>
                          </a>
                      </div>
                    </form>
                  </div>






                  <!---- Titulo Banner --->
                <div class="col-md-4 edit">
                  <div class="entrar<?php echo $titleBanner; ?>">
                      <h4 class="editable<?php echo $titleBanner; ?>" id="titleBanner" style="line-height:5 !important;">
                        <?php echo $DataBanner['titleBanner']; ?>
                    </h4>
                  </div> 
                      <div class="barra">
                        <span class="editarTitleBanner" id="<?php echo $titleBanner; ?>">
                          <a href="#" class="editar edit btn_edit<?php echo $titleBanner; ?>" id="<?php echo $titleBanner; ?>">
                              <i class="zmdi zmdi-edit"> </i>EDITAR
                          </a>
                          </span>
                        
                        <a href="#" class="editar save guardar<?php echo $titleBanner; ?>" id="<?php echo $titleBanner; ?>" style="display: none;">
                            <i class="zmdi zmdi-refresh-sync"> </i> GUARDAR
                        </a>
                      
                    </div>
                  </div>



                   <!--- banner 2 ---> 
                  <div class="col-md-4">
                  <form id="MiformBannerTwo" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="cliente_id" id="cliente_id" value="<?php echo $idUser; ?>">
                        <div class="divBanner">
                          <span id="conteBannerTwo">
                            <img src="<?php echo $DataBanner['bannerTwo']; ?>" alt="Banner 2">
                            <input type="file" name="bannerTwo" id="bannerTwo"  accept="image/*" title="Mi Banner 2">
                          </span>
                          <a href="#" class="btn-link btn-fw">
                            <i class="zmdi zmdi-border-color btnbanner"></i>
                          </a>
                      </div>
                    </form>
                  </div>

                </div>

                <div id="resp"> - - - </div>
            </div>
          </div>
        </div>
      


        </div>
      </div>
    </div>
  </div>


<?php include('js.html'); ?>
<script src="js/edit_menu.js"></script>
</body>
</html>

<?php 
} else { ?>
<script type="text/javascript">
    location.href="cerrar.php";
</script>
<?php }   
?>
