<?php

$nombre_giro=$_POST["nombre_giro"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO giros_comerciales (nombre_giro) values ('$nombre_giro')";


$conexion->query($query);

header("Location: ../listadegiros.php");



?>
