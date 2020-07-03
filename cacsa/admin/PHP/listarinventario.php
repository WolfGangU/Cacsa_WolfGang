<?php  

include("../conexion.php");

$query= "SELECT i.id_producto,i.codigo,i.estado,i.descrip,l.nombre_lugar,g.nombre_giro,i.cantidad from inventario i INNER JOIN lugares l ON
i.id_lugar = l.id_lugar INNER JOIN giros_comerciales g ON
i.id_giro = g.id_giro
where i.est_inv = 1;";

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