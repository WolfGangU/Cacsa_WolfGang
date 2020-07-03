<?php
ModificarUsuario($_POST['codigo'], $_POST['nombre'], $_POST['password'], $_POST['tipo'] );

function ModificarUsuario($codigo, $nombre, $passwordus, $tipo){
include "../conexion.php";
 $sentencia="UPDATE usuarios_cacsa SET nombre_usuario='".$nombre."', password='".$passwordus."', id_rol='".$tipo."' WHERE id='".$codigo."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../verusuarios.php';

</script>