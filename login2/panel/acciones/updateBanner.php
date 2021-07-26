<?php
include('../config.php');
                        

$directorio = "../../banners/";
$dir        = opendir($directorio);

for ($i=1; $i<=6 ; $i++) { 
    if (!empty($_FILES["banner" .$i]["name"])){
        $name      = $_FILES["banner" .$i]["name"];
        $source    = $_FILES["banner" .$i]["tmp_name"];

        
        $rutaImgCarpetaLocal   = $directorio.'/'.$name;
        $rutaImgforBd          = "banners/".$name;

        if (move_uploaded_file($source, $rutaImgCarpetaLocal)) {
            $update = ("UPDATE banners SET banner$i='".$rutaImgforBd."' WHERE id='1' ");
            $result = mysqli_query($con, $update);
         }
    }
}



//header("location:../misCars.php");

?>