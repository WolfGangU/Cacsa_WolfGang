<?php  

include("../conexion.php");

$query= "SELECT o.id_orden, p.nombre_proy,per.comercial ,CONCAT(per.nombre) nombre, o.lugar_entrega, op.nombres FROM orden_entrega o left JOIN  proyectos p on
o.id_proyecto = p.id_proyecto
inner join personas per 
on per.id_persona = o.id_persona INNER JOIN operadores op ON 
o.id_operador = op.id_operador where est_ord_e=1 ORDER BY o.id_orden desc;";

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