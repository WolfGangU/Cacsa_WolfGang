<?php
ModificarFisico($_POST['codigo'], $_POST['nombres'], $_POST['apellidos'], $_POST['email'], $_POST['telefono'], $_POST['direccion']);

function ModificarFisico($id_operador,$nombres, $apellidos, $email, $telefono, $direccion){
include "../conexion.php";
 $sentencia=" UPDATE operadores SET nombres='".$nombres."', apellidos='".$apellidos."', email_op='".$email."', telefono='".$telefono."', direccion='".$direccion."' where id_operador='".$id_operador."' ";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}
?>
<script type="application/ecmascript" >
alert("Datos Actualizados Exitosamente" );
window.location.href='../veroperadores.php';

</script>