<?php

$server= '67.217.34.70';
$user= 'parquefa_cacsadm';
$password = 'lalo37yayoZXC';
$bd = 'parquefa_admincac_cacsa1';

$conexion = mysqli_connect($server, $user, $password, $bd);
$conexion-> set_charset("utf8");
if (!$conexion){
	die("Error de conexión : ".mysqli_connect_errno());

}

?>