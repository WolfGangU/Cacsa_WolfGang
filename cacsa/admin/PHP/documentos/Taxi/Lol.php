<?php 
include 'conexion.php';
$carpeta=$_POST['tipo'];//string
$num_orden=$_POST['orden'];//int

echo $carpeta;
echo $num_orden;

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



$mysqli = new mysqli("localhost", "root", "", "cacsachido");

$query = "INSERT INTO documentos (nombre_archivo,id_orden,tipo_documento,ruta_archivo,fecha_subida) values ('$nombre','$num_orden','$carpeta','$ruta',NOW())";


$mysqli->query($query);

?> <script type="application/ecmascript"
> 

window.location.href='../../verdocumentos.php';


</script>


 