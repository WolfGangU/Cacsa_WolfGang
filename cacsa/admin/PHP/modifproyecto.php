<?php
ModificarProyecto($_POST['codigo'], $_POST['nombrl'],$_POST['client'] ,$_POST['Lugar'], $_POST['estado'] );

function ModificarProyecto($id_proy, $nombrl, $client ,$Lugar, $estado ){
include "../conexion.php";
 $sentencia="UPDATE proyectos SET nombre_proy='".$nombrl."', id_persona='".$client."', id_lugar='".$Lugar."', estado_p='".$estado."' WHERE id_proyecto='".$id_proy."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../verproyectoscurso.php';

</script>