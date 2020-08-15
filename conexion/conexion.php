<?php
//Funcion que agarra los datos del servidor, base de datos, contraseña y usuario de mysql y realiza la conexion y selecciona la base de datos que vamos a usar
 function conectar(){
     $usuario="admin_sigmauser";
     $contraseña="pfaDKIJyPF";
     $servidor="178.128.146.252";
     $db="admin_sigmatest";
     $conexion=  mysqli_connect($servidor,$usuario,$contraseña) or die ("Error al conectar la BASE DE DATOS".  mysqli_error());
     mysqli_select_db($conexion, $db);    
     return $conexion;    
 }


