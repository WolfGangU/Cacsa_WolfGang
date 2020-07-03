<?php  

include("../conexion.php");

$query= "SELECT lug.nombre_lugar, CONCAT(ta.precio,'MXN$') as precio, ta.id_tarifa FROM tarifas ta INNER join lugares lug ON 
ta.id_lugar = lug.id_lugar;";

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