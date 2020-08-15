<?php
//Incluye la conexion que se retorna en 'conexion.php' y la valida, si esta incorrecta envia mensaje de error, si es correcta deja pasar al usuario
include ("conexion.php");
$conexion=  conectar();
if (!$conexion){
echo ("No se pudo conectar".  mysqli_error());
}  else {
 echo("");   
}
?>

