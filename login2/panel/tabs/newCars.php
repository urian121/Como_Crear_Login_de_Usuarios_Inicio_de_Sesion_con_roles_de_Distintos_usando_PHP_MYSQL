
<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
require("../config.php");

$cliente_id     = $_POST['cliente_id'];
$namecar        = ucwords($_POST['namecar']);
$address        = $_POST['address'];
$marca          = ucwords($_POST['marca']); //siempre la 1 letra mayuscula
$year           = $_POST['year'];
$placa          = strtoupper($_POST['placa']); //Todo mayuscula
$puertas        = $_POST['puertas'];
$color          = $_POST['color'];
$combustible    = $_POST['combustible'];
$km             = $_POST['km'];
$transmition    = $_POST['transmition'];
$cant           = $_POST['cant'];
$description    = $_POST['description'];
$cc             = $_POST['cc'];
$city_matricula = $_POST['city_matricula'];
$f_register_car = date("Y-m-d");
$statusTermino  = $_POST['statusTermino'];



$quitarString     = array(",", "."); 
$sinStrinPrecio   = str_replace($quitarString, "", $_POST['precio']);
$precio      	  =  number_format($sinStrinPrecio, 0,'','.');

$query = "INSERT INTO carros(
    cliente_id,
	namecar,
    address,
	marca,
	year,
    cc,
	precio,
	placa,
    city_matricula,
    puertas,
    color,
    combustible,
    km,
    transmition,
    description,
    f_register_car,
    statusTermino
	)
VALUES (
    '" .$cliente_id. "',
	'" .$namecar. "',
    '". $address."',
	'" .$marca. "',
	'" .$year. "',
    '" .$cc. "',
    '" .$precio. "',
	'" .$placa. "',
    '" .$city_matricula. "',
    '" .$puertas. "',
	'" .$color. "',
	'" .$combustible. "',
    '" .$km. "',
    '" .$transmition. "',
	'" .$description. "',
    '" .$f_register_car. "',
    '" .$statusTermino. "'
)";
$result = mysqli_query($con, $query);



$directorio = "../fotosCars/Placa_".$placa."/";
mkdir($directorio, 0777, true);


$dir = opendir($directorio);
for ($i=1; $i <=10; $i++) {
    $filename = $_FILES["foto".$i]["name"];
    $source   = $_FILES["foto".$i]["tmp_name"];

    $target_path = $directorio.'/'.$filename;
    if(move_uploaded_file($source, $target_path)) {
        //echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
        } else {
       // echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
    }
}
closedir($dir);


$sqlUltimoProducto    	   = ("SELECT MAX(id) AS idCar  FROM carros LIMIT 1 ");
$queryUltimoProducto  	   = mysqli_query($con, $sqlUltimoProducto);
$DataqueryUltimoProducto   = mysqli_fetch_array($queryUltimoProducto);


$urlfoto ="fotosCars/Placa_".$placa."/";
$sqlinsertfotos = ("INSERT INTO fotocars(
	carro_id,
    foto1,
    foto2,
    foto3,
    foto4,
    foto5,
    foto6,
    foto7,
    foto8,
    foto9,
    foto10,
    cant
    )
VALUES(
'".$DataqueryUltimoProducto["idCar"]."',
'".$urlfoto.$_FILES["foto1"]["name"]."',
'".$urlfoto.$_FILES["foto2"]["name"]."',
'".$urlfoto.$_FILES["foto3"]["name"]."',
'".$urlfoto.$_FILES["foto4"]["name"]."',
'".$urlfoto.$_FILES["foto5"]["name"]."',
'".$urlfoto.$_FILES["foto6"]["name"]."',
'".$urlfoto.$_FILES["foto7"]["name"]."',
'".$urlfoto.$_FILES["foto8"]["name"]."',
'".$urlfoto.$_FILES["foto9"]["name"]."',
'".$urlfoto.$_FILES["foto10"]["name"]."',
'".$cant ."'
)");
$resulInsert = mysqli_query($con, $sqlinsertfotos);

/**pasando la variable pr que significa producto registrado**/
header("Location:../misCars.php?pr=pr");

?>