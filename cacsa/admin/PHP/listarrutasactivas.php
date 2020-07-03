<?php  

include("../conexion.php");

$query= "SELECT r.id_ruta,p.nombre_proy,lug.nombre_lugar,op.nombres,gc.nombre_giro,r.tipo_servicio,r.fecha_inicio,r.fecha_final,r.subtotal,r.iva,r.total FROM rutas r INNER JOIN orden_entrega od ON 
r.id_orden = od.id_orden INNER JOIN lugares lug ON 
r.id_lugar = lug.id_lugar INNER JOIN operadores op ON
r.id_operador = op.id_operador INNER JOIN giros_comerciales gc ON 
r.id_giro = gc.id_giro left JOIN proyectos p ON
od.id_proyecto = p.id_proyecto left join personas per
on od.id_persona = per.id_persona
WHERE r.est_rut = 1
 ORDER BY r.id_ruta desc;";

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