<?php
include 'Plantilla.php';//se llama a la plantilla que encabeza todos los docuementos
 $pdf = new PDF();
include 'conexion.php';
$A=$_GET['id'];//se recolecta la informacion del id y muestra los productos que vaya a tener la orden
$sql = "SELECT inv.id_producto, inv.codigo, inv.descrip, lug.nombre_lugar, inv.cantidad, inv.estado, g.nombre_giro FROM inventario inv inner join giros_comerciales g on g.id_giro = inv.id_giro INNER JOIN lugares lug ON
inv.id_lugar = lug.id_lugar inner join detalle_ruta tmp
on inv.id_producto=tmp.id_producto WHERE tmp.id_orden='".$A."'"; 
$result= mysqli_query($conexion,$sql);  
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; //se Consulta la informacion del inventario de forma disponible 
   $sentencia="SELECT CONCAT(per.nombre,' ',per.apellidos) as nombrec, ord.lugar_entrega, CONCAT(op.nombres,' ',op.apellidos) as nombreop, pro.nombre_proy from orden_entrega ord left join personas per on ord.id_persona = per.id_persona left join proyectos pro on ord.id_proyecto = pro.id_proyecto inner join operadores op on op.id_operador=ord.id_operador where ord.id_orden=$id_pro";
    $resultado= $conexion->query($sentencia);

    $mostrar=$resultado->fetch_assoc();
    return [
         
        $mostrar['lugar_entrega'],//0
  
          $mostrar['nombre_proy'],//3
         $mostrar['nombrec'],//4
         $mostrar['nombreop'],//5

      
    ];
   
}




    
    
   


 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(59,131,189); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Orden de Salida',1,1,'C',1);
$pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B','10');
  
   $pdf->SetFont('Arial','B','10');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'Cliente: '.utf8_decode($consulta[2]),1,0,'L');
   $pdf->Cell(90,6,'Lugar de Entrega: '.$consulta[0],1,1,'L');
    $pdf->Cell(5);
  $pdf->Cell(90,6,'Operador: '.utf8_decode($consulta[3]),1,0,'L');
   $pdf->Cell(90,6,'Proyecto: '.utf8_decode($consulta[1]),1,1,'L');
     $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Productos en esta orden',1,1,'C',1);
 $pdf->Cell(15);

$pdf->SetTextColor(0,0,0);
 $pdf->SetFillColor(219, 214, 214); 
  $pdf->Cell(8,8,'C',1,0,'C',1);
 $pdf->SetFont('Arial','B','10');
$pdf->Cell(60,8,'Codigo',1,0,'C',1);
$pdf->Cell(45,8,'Descripcion',1,0,'C',1);
$pdf->Cell(45,8,'Giro Comercial',1,1,'C',1);
while($mostrar=mysqli_fetch_array($result)){
 $pdf->SetFillColor(255, 255, 255); 


$pdf->SetFont('Arial','B','10');
 $pdf->Cell(15);
  $pdf->Cell(8,8,'',1,0,'C',1);
$pdf->Cell(60,8,$mostrar['codigo'],1,0,'C',1);
$pdf->Cell(45,8,$mostrar['descrip'],1,0,'C',1);
$pdf->Cell(45,8,$mostrar['nombre_giro'],1,1,'C',1);




}
$pdf->SetY(250);

$pdf->SetFont('Arial','I',10);

$pdf->Cell(40,1,'_________________________',0,0);
$pdf->Cell(50);
$pdf->Cell(40,1,'_________________________',0,1);
$pdf->Cell(40,10,'Firma del Operador',0,0);
$pdf->Cell(50);
$pdf->Cell(40,10,'Firma del Cliente',0,1);






 $pdf->Output('','ordendeentrega');//im
?>