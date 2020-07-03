<?php

$nombrl=$_POST["nombrl"];
$client=$_POST["client"];
$estado=$_POST["estado"];
$Lugar=$_POST["Lugar"];



include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO proyectos (nombre_proy,id_persona,id_lugar,estado_p) values ('$nombrl','$client','$Lugar','$estado')";


$conexion->query($query);

header("Location: ../verproyectoscurso.php");



?>
