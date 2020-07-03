<?php
ModificarLugar($_POST['num'], $_POST['nombrl'] );

function ModificarLugar($num, $nombr){
include "../conexion.php";
 $sentencia="UPDATE lugares SET nombre_lugar='".$nombr."' WHERE id_lugar='".$num."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../listadelugares.php';

</script>