<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
	// Page header
function Header(){
	$l = 5; 
	$this->SetXY(10,10);
	$this->Rect(10,10,190,280);
    // Logo
    $this->Image('logomanoel.jpg',11,11,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    // $this->Cell(80);
    // Title
    $this->Cell(190,22,utf8_decode('Relatório'),1,0,'C');
    // Line break
    $this->Ln();

    $l=5;
    $this->SetFillColor(232,233,232);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','B',8);
    $this->Cell(95,$l,'Nome',1,0,'L',1);
    $this->Cell(95,$l,'Curso',1,0,'L',1);

}

function Footer()

{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
}

}
include 'conexao.php';
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,utf8_decode('Imprimindo o  número de linhas ').$i,0,1);
$y=37;
$sql = "SELECT nome, curso FROM questoes";

$resultado = mysqli_query($connection, $sql);
$l=5;
while($row = mysqli_fetch_array($resultado)){
	$nome = utf8_decode($row['0']);
	$curso = utf8_decode($row['1']);

	$pdf->SetY($y);
	$pdf->SetX(10);
	$pdf->Rect(10,$y,95,$l);
	$pdf->MultiCell(51,6,$nome,0,10);

	$pdf->SetY($y);
	$pdf->SetX(105);
	$pdf->Rect(105,$y,95,$l);
	$pdf->MultiCell(51,6,$curso,0,10);


	$y += $l;


}
$pdf->Output();

?>