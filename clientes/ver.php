<?php
include 'plantilla.php';
require 'conexion.php';

$query="SELECT cliente_id, cliente_rfc, cliente_razon_social, cliente_email, cliente_direccion FROM tbl_cliente WHERE cliente_estado=1";
$resultado=$mysqli->query($query);



$pdf= new PDF('L','mm','Letter');

$pdf->AliasNbPages();
$pdf->SetTopMargin(20);
$pdf->addPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(60,6,'Nombre cliente',1,0,'C',1);
$pdf->Cell(15,6,'RFC',1,0,'C',1);
$pdf->Cell(50,6,utf8_decode('Correo electrónico'),1,0,'C',1);
$pdf->Cell(50,6,utf8_decode('Dirección fiscal'),1,1,'C',1);


$pdf->SetFont('Arial','',9);

while ($row=$resultado->fetch_assoc())
{
$pdf->Cell(20,6,$row['cliente_id'],1,0,'C');
$pdf->Cell(60,6,utf8_decode($row['cliente_razon_social']),1,0,'C');
$pdf->Cell(15,6,$row['cliente_rfc'],1,0,'C');
$pdf->Cell(50,6,$row['cliente_email'],1,0,'C');
$pdf->Cell(50,6,utf8_decode($row['cliente_direccion']),1,1,'C');

}

$pdf->Output();
?>