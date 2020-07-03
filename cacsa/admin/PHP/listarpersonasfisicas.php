<?php  

include("../conexion.php");

$query= "SELECT id_persona, nombre, apellidos, rfc, direccion_fiscal, telefono, email FROM personas p WHERE tipo= 1 and est_per = 1;";

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