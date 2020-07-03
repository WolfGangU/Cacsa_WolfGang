<?php  

include("../conexion.php");

$query= "SELECT id_documento, nombre_archivo, tipo_documento, fecha_subida, ruta_archivo from documentos where est_doc = 1  order by fecha_subida desc;";

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