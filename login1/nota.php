<?php 
session_start();
 
/* comprobamos que un usuario registrado es el que accede al archivo, 
sino no tendría sentido que pasara por este archivo */
if (!isset($_SESSION[alumno])) 
{
    header("location:../index.php"); 
}
 
/* usamos la función session_unset() para liberar la variable 
de sesión que se encuentra registrada */
session_unset($_SESSION[alumno]);
 
// Destruye la información de la sesión
session_destroy();
 
//volvemos a la página principal
header("location:../index.php"); 
 
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['alumno'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location:../index.php"); 
}





   session_start();
   $location = 'Location: login.php';

   if (isset($_SESSION['usuario'])){
      switch ($_SESSION['usuario']['rol']) {
        case 'admin':
           $location = 'Location: indexAdmin.php';
           break;
        case 'usuario':
           $location = 'Location: indexUsuario.php';
           break;
        case 'dotor':
           $location = 'Location: indexMedico.php';
           break;
        default:
           $location = 'Location: indexGenerico.php';
       }
   }

   header($location);
?>


<?php
session_start();
if(isset($_SESSION["usuario"])){
    if($_SESSION["privilegio"] == 1){

    }else{
        header("Location: user.php");
    }
}else{
     header("Location: index.php");
}
?>