<?php
ModificarSalida($_POST['proyecto'],$_POST['lugar_entrega'] ,$_POST['operador'] );

function ModificarSalida($proyecto,$lugar_entrega ,$operador ){
include "../conexion.php";
 $sentencia="UPDATE orden_entrega SET id_proyecto='".$proyecto."', lugar_entrega='".$lugar_entrega."', id_operador='".$operador."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../listadesalida.php';

</script>