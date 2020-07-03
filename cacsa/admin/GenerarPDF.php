<?php
 //Agregamos la libreria FPDF
include 'Plantilla.php';//se llama a la plantilla que encabeza todos los docuementos
 $pdf = new PDF();
include 'conexion.php';
 $pdf->SetFont('Arial','B','4');
$A= $_GET['id'];
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{include 'conexion.php';
    $sentencia = "SELECT CONCAT(per.nombre) as nombrec, CONCAT( op.nombres,' ',op.apellidos) as nombreop, lug.nombre_lugar, g.nombre_giro, COUNT(det.id_producto) as numproducto, r.tipo_servicio, r.fecha_inicio, r.fecha_final from rutas r inner join orden_entrega o on o.id_orden=r.id_orden INNER JOIN detalle_ruta det on det.id_orden= o.id_orden inner join personas per on per.id_persona = o.id_persona inner join operadores op on op.id_operador = r.id_operador inner join lugares lug on lug.id_lugar=r.id_lugar inner join giros_comerciales g on g.id_giro = r.id_giro where r.id_ruta= '".$id_pro."' and r.est_rut=1";
    $conexion->set_charset("utf8");
$resultado= $conexion->query($sentencia);

   $mostrar=$resultado->fetch_assoc();
    return [
         
        $mostrar['nombre_lugar'],//0
  
          $mostrar['nombre_giro'],//1
         $mostrar['nombrec'],//2
         $mostrar['nombreop'],//3
  $mostrar['tipo_servicio'],//4
         $mostrar['nombrec'],//5
          $mostrar['fecha_inicio'],//6
           $mostrar['fecha_final'],//7
       $mostrar['numproducto']
    ];
//Creamos un objeto de la librería
}

 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(59,131,189); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Bitacora de Servicios',1,1,'C',1);
$pdf->SetTextColor(0,0,0);
 $pdf->SetFont('Arial','B','14');
 

$c=1;
 
   $pdf->SetFont('Arial','B','8');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'Cliente: '.utf8_decode($consulta[5]),1,0,'L');
  $pdf->Cell(90,6,'Equipo: '.$consulta[8].'  '.utf8_decode($consulta[1]),1,1,'L');
   $pdf->Cell(5);
   $pdf->Cell(90,6,'Ciudad: '.utf8_decode($consulta[0]),1,0,'L');
  $pdf->Cell(90,6,'Servicio: '.utf8_decode($consulta[4]),1,1,'L');
 $pdf->Cell(5);
 $pdf->Cell(90,6,'Area: ',1,0,'L');
  $pdf->Cell(90,6,'Fecha de Serv: '.$consulta[6].' a '.$consulta[7],1,1,'L');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'AT`N: ',1,0,'L');
  $pdf->Cell(90,6,'Responsable: '.utf8_decode($consulta[3]),1,1,'L');
 $pdf->SetFont('Arial','B','9');
  $pdf->Cell(5);
$pdf->Cell(25,10,'Fecha',1,0,'C');
$sql = "SELECT inv.id_producto, inv.codigo FROM inventario inv inner join detalle_ruta tmp on inv.id_producto=tmp.id_producto inner join rutas r on r.id_orden=tmp.id_orden WHERE r.id_ruta='".$A."'"; 
$result= mysqli_query($conexion,$sql);  

while($mostrar=mysqli_fetch_array($result)){
 $pdf->SetFillColor(255, 255, 255); 
$c=$c+1;

$pdf->SetFont('Arial','B','10');
$pdf->Cell(30,10,$mostrar['codigo'],1,0,'C',1);





}
for($i=1;$i<=10;$i++){
for($t=1;$t<=$c;$t++){
  $pdf->Cell(5,5,'',0,1);  
   $pdf->Cell(25,15,' ',1,0,'C'); 
    $pdf->Cell(30,8,'',1,0,'C',1);
}
}






//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha


$pdf->Output('','Bit_'.$consulta[1].utf8_decode($consulta[5]).'.pdf');//imprime y renombraeldocuemnto
?>