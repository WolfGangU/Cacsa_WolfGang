<?php 
include 'conexion.php';
$id_op=$_GET['id'];
$id_tip_doc=$_GET['od'];
//string

 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; //se Consulta la informacion del inventario de forma disponible 
   $sentencia="SELECT op.id_operador,CONCAT(op.nombres,' ',op.apellidos) AS nombreop,op.email_op,op.telefono,op.direccion, op.ife, op.lic_manejo, op.imss_arch FROM operadores op where op.id_operador='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['nombreop'],
    
      
    ];
   
}
$carpeta=$consulta[0];




date_default_timezone_set('America/Mexico_City');
if(file_exists("$carpeta"))
{
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


    $fichero_subido = $carpeta."/". basename($_FILES['archivo']['name']);


if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
 
$ruta=$carpeta."/".$nombre;
?><script type="application/ecmascript" >

   alert("El fichero se subio correctamente :)" );
</script>

<?php

} else {
    ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :(" );
</script>
<?php


}


} else{
mkdir($carpeta);
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];



    $fichero_subido = $carpeta."/". basename($_FILES['archivo']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {



$ruta=$carpeta."/".$nombre;
?><script type="application/ecmascript" >

   alert("El fichero se subio correctamente :)" );
</script>

<?php
} else {
  ?>
    <script type="application/ecmascript" >

   alert("Problema al subir el fichero :(" );
</script>
<?php
}

}



$mysqli = new mysqli("67.217.34.70", "parquefa_cacsadm", "lalo37yayoZXC", "parquefa_admincac_cacsa1");
$mysqli -> set_charset("utf8");


switch($id_tip_doc){
case 1:
$query = "UPDATE operadores set imss_arch = '$ruta' where id_operador='".$id_op."' ";
break;

case 2:
$query = "UPDATE operadores set lic_manejo = '$ruta' where id_operador='".$id_op."' ";
break;
case 3:
$query = "UPDATE operadores set ife = '$ruta' where id_operador='".$id_op."' ";
break;

}

$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../../Docs_operador.php?id=<?php echo $id_op ?>';


</script>


 