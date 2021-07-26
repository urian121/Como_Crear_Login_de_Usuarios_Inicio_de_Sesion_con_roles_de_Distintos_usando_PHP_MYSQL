<?php
if(isset($_REQUEST['errorS'])){ ?>
        <div id="mini-notification">
            <p>
               <strong style="color:#333 !important;"> Ops.! ! </strong>
              Algunos datos son incorrectos, verifique.
            </p>
        </div>
<?php } ?>

<?php
if(isset($_REQUEST['ccc'])){ ?>
        <div id="mini-notification">
            <p>
               <strong style="color:#333 !important;"> Felicitaciones </strong>
              La sesión fue cerrada correctamente.
            </p>
        </div>
<?php } ?>
?>
