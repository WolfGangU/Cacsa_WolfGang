<?php  

include("../conexion.php");

$query= "SELECT d.nombre_archivo, d.fecha_subida FROM documentos d 
WHERE d.tipo_documento = 2
order BY d.fecha_subida desc;";

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