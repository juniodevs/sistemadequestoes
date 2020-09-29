<?php
require 'fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Output();

?>