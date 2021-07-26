<?php
include('../config.php');
                        
$idCar      = $_POST['idCar'];

$namecar        = ucwords($_POST['namecar']);
$address        = $_POST['address'];
$marca          = ucwords($_POST['marca']);
$year           = $_POST['year'];
$placa          = strtoupper($_POST['placa']);
$puertas        = $_POST['puertas'];
$color          = $_POST['color'];
$combustible    = $_POST['combustible'];
$km             = $_POST['km'];
$transmition    = $_POST['transmition'];
$cant           = $_POST['cant'];
$description    = $_POST['description'];
$cc             = $_POST['cc'];
$city_matricula = $_POST['city_matricula'];

$quitarString     = array(",", "."); 
$sinStrinPrecio   = str_replace($quitarString, "", $_POST['precio']);
$precio           =  number_format($sinStrinPrecio, 0,'','.');


$UpdateProd = ("UPDATE carros 
    SET namecar ='$namecar',
        address ='$address',
        marca ='$marca',
        year ='$year',
        cc ='$cc',
        precio ='$precio',
        placa ='$placa',
        city_matricula ='$city_matricula',
        puertas ='$puertas',
        color ='$color',
        combustible ='$combustible',
        km ='$km',
        transmition ='$transmition',
        description ='$description'
    WHERE id='".$idCar."' ");
$result = mysqli_query($con, $UpdateProd);


$update = ("UPDATE fotocars SET cant='".$cant."' WHERE carro_id='".$idCar."' ");
$result = mysqli_query($con, $update);


$directorio = "../fotosCars/Placa_".$placa."/";
$urlfotobd  = "fotosCars/Placa_".$placa;
$dir        = opendir($directorio);

for ($i=1; $i<=10 ; $i++) { 
    if (!empty($_FILES["foto" .$i]["name"])){
        $name      = $_FILES["foto" .$i]["name"];
        $source    = $_FILES["foto" .$i]["tmp_name"];

        
        $rutaImgCarpetaLocal   = $directorio.'/'.$name;
        $rutaImgforBd          = $urlfotobd.'/'.$name;

        if (move_uploaded_file($source, $rutaImgCarpetaLocal)) {

            $update = ("UPDATE fotocars SET foto$i='".$rutaImgforBd."' WHERE carro_id='".$idCar."' ");
            $result = mysqli_query($con, $update);
         }
    }
}
closedir($dir);


header("location:../misCars.php");

?>