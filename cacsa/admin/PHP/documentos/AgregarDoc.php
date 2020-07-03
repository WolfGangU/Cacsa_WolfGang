<?php 
include 'conexion.php';
$carpeta=$_POST['tipo'];//strint

//string
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

$query = "INSERT INTO documentos (nombre_archivo,tipo_documento,ruta_archivo,fecha_subida) values ('$nombre','$carpeta','$ruta',NOW())";


$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../verdocumentos.php';


</script>


 