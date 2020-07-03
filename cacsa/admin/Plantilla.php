<?php
 //Agregamos la libreria FPDF
//Plantilla posterios de documentos
 require('FPDF/fpdf.php');
  
 class PDF extends FPDF 
 {
Function header ()
{

$this->image('FPDF/imagenes/cacsa.png',0,9,25,25,'PNG');
$this->Settextcolor(59,131,189);
$this->Setfont('Arial','B',16);
$this->Cell(40);
$this->Cell(120,10,'CONSTRUCTORA Y ABASTECEDORA CALZADAS S.A. DE C.V.',0,0,'C');
$this->Settextcolor(59,131,189);
$this->Setfont('Arial','B',9);
$this->Cell(40);
$this->Cell(-200,20,'ADOLFO LOPEZ MATEOS , No.112-A, COLONIA PETROLERA, COATZACOALCOS, VER. C.P. 96500',0,0,'C');
$this->Settextcolor(59,131,189);
$this->Setfont('Arial','B',9);
$this->Cell(40);
$this->Cell(120,30,'TEL. (921) 212.42.42/ 921.163.13.44                contabilidad@cacsawc.com    
    servicios@cacsawc.com
',0,1,'C');

}







 }