<?php

$modelo=$_POST["modelo"];
$descrip=$_POST["descrip"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO vehiculos (modelo,descripcion) values ('$modelo','$descrip')";


$conexion->query($query);

header("Location: ../listadevehiculos.php");



?>