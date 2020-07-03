<?php  

include("../conexion.php");

$query= "SELECT u.id,u.nombre_usuario,ur.nombre  from usuarios_cacsa u INNER JOIN usuarios_roles ur ON 
u.id_rol = ur.id_rol;";

$resultado = mysqli_query($conexion, $query);

if ( !$resultado ){
	die("Error");

}else{
	while( $data= mysqli_fetch_assoc($resultado)){
		$arreglo["data"][] = $data;
	}
	echo json_encode($arreglo);
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>