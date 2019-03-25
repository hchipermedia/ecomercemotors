<?php
require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('http://demo.solucioneshipermedia.com/wp-content/themes/shbase/images/logo.png',10,8,50);
	// Logo 2
    $this->Image('http://demo.solucioneshipermedia.com/wp-content/themes/shbase/images/logo.png',150,8,50);
    // Arial bold 15
    $this->SetFont('Helvetica','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Ficha de inscripción',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
}

function TituloSeccion($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Color de fondo
    $this->SetFillColor(200,220,255);
    // Título
    $this->Cell(0,6,"Sección $num : $label",0,1,'L',true);
    // Salto de línea
    $this->Ln(4);
}

}

$pdf = new PDF();
$title = '20000 Leguas de Viaje Submarino';
$pdf->SetTitle($title);
$pdf->SetAuthor('Julio Verne');
$pdf->AddPage();
$pdf->TituloSeccion(1,'Datos del alumno');
$pdf->AddPage();
$pdf->TituloSeccion(2,'Datos del padre, madre o tutor');
$pdf->Output();


?>