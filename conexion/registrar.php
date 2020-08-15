
<?php

require_once './conprincipal.php';

$conexion = conectar();

//Recibir los datos del formulario y almacenarlos en las variables predefinidas

$departamento = $_POST["departamento"];
$ciudad = $_POST["ciudad"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

//consulta para insertar los datos a la BD 
$sql = "INSERT INTO contacts (name, email, state, city) "
        . "VALUES('$nombre','$correo','$departamento','$ciudad')";

//Ejecutamos la consulta
$resultado = mysqli_query($conexion, $sql);

mysqli_close($conexion);

