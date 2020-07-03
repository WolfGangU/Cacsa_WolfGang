<?php  

include("../conexion.php");

$query= "SELECT p.id_proyecto, p.nombre_proy, per.nombre, lug.nombre_lugar FROM proyectos p INNER JOIN personas per ON
p.id_persona = per.id_persona INNER JOIN lugares lug ON
p.id_lugar = lug.id_lugar WHERE p.est_pro = 1;";

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