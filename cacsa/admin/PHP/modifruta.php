<?php
ModificarRuta($_POST['codigo'], $_POST['proyecto'],$_POST['lugar'] ,$_POST['operador'],$_POST['giro'],$_POST['tipo_servicio'],$_POST['fecha_inicio'],$_POST['fecha_final'],$_POST['estado_ruta'],$_POST['subtotal'],$_POST['iva'],$_POST['total'] );

function ModificarRuta($idruta, $proyecto, $lugar , $operador, $giro, $tipo_servicio , $fecha_inicio, $fecha_final, $estado_ruta ,$subtotal, $iva, $total ){
include "../conexion.php";
 $sentencia="UPDATE rutas SET id_lugar='".$lugar."', id_operador='".$operador."', id_giro='".$giro."', tipo_servicio='".$tipo_servicio."', fecha_inicio='".$fecha_inicio."', fecha_final='".$fecha_final."', estado_ruta='".$estado_ruta."', subtotal='".$subtotal."', iva='".$iva."', total='".$total."' WHERE id_ruta='".$idruta."' ";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../listaderutas.php';

</script>