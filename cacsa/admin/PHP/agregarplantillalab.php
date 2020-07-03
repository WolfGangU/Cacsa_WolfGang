<?php

$nombres=$_POST["nombre"];
$apellidos=$_POST["apellido"];
$Rol=$_POST["Rol"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$imss=$_POST["imss"];
echo $nombres."\n";
echo $apellidos."\n";
echo $Rol."\n";
echo $email."\n";
echo $telefono."\n";
echo $direccion."\n";
echo $imss."\n";

include ('conexion.php');

if($conexion->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}




$query = "INSERT INTO plantilla_lab (nombres_plan,id_rol,apellidos_plan,email_plan,num_plan,direc_plan,no_imss) values ('$nombres','$Rol','$apellidos','$email','$telefono','$direccion','$imss')";


$conexion->query($query);
header("Location: ../listadeplantillalab.php");



?>