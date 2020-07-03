<?php  

include("../conexion.php");

$query= "SELECT pp.id_pase, CONCAT(op.nombres,' ', op.apellidos) as nombreop, pp.nombre_pase, pp.arch_pase, pp.fecha_venci  from pases_personales pp 
inner join operadores op on pp.id_operador = op.id_operador
order BY pp.fecha_venci desc";

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