<?php  

include("../conexion.php");

$query= "SELECT op.id_plant,u.nombre_rol,op.nombres_plan,op.apellidos_plan,op.email_plan,op.num_plan,op.direc_plan FROM plantilla_lab op inner join roles u on u.id_rol=op.id_rol where op.est_pla=1;";

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