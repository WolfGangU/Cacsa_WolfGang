<?php

$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$imss=$_POST["imss"];


include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}

mkdir("/documentos/operadores/lol",0700);


$query = "INSERT INTO operadores (nombres,apellidos,email_op,telefono,direccion,no_imss) values ('$nombres','$apellidos','$email','$telefono','$direccion','$imss')";


$conexion->query($query);
header("Location: ../veroperadores.php");



?>