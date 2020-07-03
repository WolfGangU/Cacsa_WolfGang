<?php  

include("../conexion.php");

$query= "SELECT bc.id_bloc,bc.nombre_conta,bc.telefono_conta,bc.email_conta,bc.nota,bc.empresa FROM bloc_notas bc;";

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