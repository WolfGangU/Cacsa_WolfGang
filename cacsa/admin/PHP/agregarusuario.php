<?php
$nombre=$_POST["nombre"];
$passwordus=$_POST["password"];
$tipo=$_POST["tipo"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO usuarios_cacsa (nombre_usuario,password,id_rol) values ('$nombre','$passwordus','$tipo')";


$conexion->query($query);

header("Location: ../verusuarios.php");



?>
