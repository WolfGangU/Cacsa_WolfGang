<?php
ModificarGiro($_POST['codigo'], $_POST['nombre_giro'] );

function ModificarGiro($codigo, $nombr){
include "../conexion.php";
 $sentencia="UPDATE giros_comerciales SET nombre_giro='".$nombr."' WHERE id_giro='".$codigo."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../listadegiros.php';

</script>