<?php  

include("../conexion.php");

$query= "SELECT op.id_operador,op.nombres,op.apellidos,op.email_op,op.telefono,op.direccion FROM operadores op where op.est_op=1;";

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