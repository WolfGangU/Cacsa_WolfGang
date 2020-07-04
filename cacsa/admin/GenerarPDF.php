<?php
 //Agregamos la libreria FPDF
include 'Plantilla.php';//se llama a la plantilla que encabeza todos los docuementos
 $pdf = new PDF();
include 'conexion.php';
 $pdf->SetFont('Arial','B','4');
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{include 'conexion.php';
    $sentencia = "SELECT CONCAT( per.nombre,' ',per.apellidos) as nombrec, CONCAT( op.nombres,' ',op.apellidos) as nombreop, lug.nombre_lugar, g.nombre_giro, r.tipo_servicio, r.fecha_inicio, r.fecha_final from rutas r inner join orden_entrega o on o.id_orden=r.id_orden inner join personas per on per.id_persona = o.id_persona inner join operadores op on op.id_operador = r.id_operador inner join lugares lug on lug.id_lugar=r.id_lugar inner join giros_comerciales g on g.id_giro = r.id_giro where r.id_ruta=$id_pro";
$resultado= $conexion->query($sentencia);
   $mostrar=$resultado->fetch_assoc();
    return [
         
        $mostrar['nombre_lugar'],//0
  
          $mostrar['nombre_giro'],//1
         $mostrar['nombrec'],//2
         $mostrar['nombreop'],//3
  $mostrar['tipo_servicio'],//4
         $mostrar['nombrec'],//5
         $mostrar['nombreop'],//6
          $mostrar['fecha_inicio'],//7
           $mostrar['fecha_final']//8
      
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
 


 
   $pdf->SetFont('Arial','B','6');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'Cliente: '.utf8_decode($consulta[5]),1,0,'L');
  $pdf->Cell(90,6,'Equipo: '.utf8_decode($consulta[1]),1,1,'L');
   $pdf->Cell(5);
   $pdf->Cell(90,6,'Ciudad: '.utf8_decode($consulta[0]),1,0,'L');
  $pdf->Cell(90,6,'Servicio: '.utf8_decode($consulta[4]),1,1,'L');
 $pdf->Cell(5);
 $pdf->Cell(90,6,'Area: ',1,0,'L');
  $pdf->Cell(90,6,'Fecha de Serv: '.$consulta[7].' a '.$consulta[8],1,1,'L');
   $pdf->Cell(5);
 $pdf->Cell(90,6,'AT`N: ',1,0,'L');
  $pdf->Cell(90,6,'Responsable: '.utf8_decode($consulta[6]),1,1,'L');
 $pdf->SetFont('Arial','B','9');
$pdf->Cell(15,15,'Fecha',1,0,'C');
$pdf->Cell(30,15,'Hora de entrada',1,0,'C');
$pdf->Cell(30,15,'Hora de salida',1,0,'C');
$pdf->Cell(42,15,'Nombre y firma del cliente',1,0,'C');
$pdf->Cell(44,15,'Nombre y firma del operador',1,0,'C');
$pdf->Cell(32,15,'Observaciones',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');
$pdf->Cell(15,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(42,15,'',1,0,'C');
$pdf->Cell(44,15,'',1,0,'C');
$pdf->Cell(32,15,'',1,1,'C');









//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha


$pdf->Output('',trim("Bit_".$consulta[1].utf8_decode($consulta[5])));//imprime y renombraeldocuemnto
?>