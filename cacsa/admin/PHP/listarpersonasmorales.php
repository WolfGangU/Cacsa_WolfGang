<?php  

include("../conexion.php");

$query= "SELECT p.id_persona, p.comercial, p.nombre2, p.apellidos,p.nombre3, p.apellidos2, p.rfc, p.RFC2, p.RFC3, p.direccion_fiscal, p.telefono, p.email 
FROM personas p WHERE tipo = 2 and est_per = 1;";

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