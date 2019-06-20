<?php
include 'plantilla.php';
require 'conexion.php';

$query="SELECT producto_id,producto_descripcion,producto_unidad, producto_precio FROM tbl_producto";
$resultado=$mysqli->query($query);



$pdf= new PDF('P','mm','Letter');

$pdf->AliasNbPages();
$pdf->SetTopMargin(20);
$pdf->addPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'Producto',1,0,'C',1);
$pdf->Cell(70,6,'Nombre',1,0,'C',1);
$pdf->Cell(40,6,'Unidad de venta',1,0,'C',1);
$pdf->Cell(60,6,'Precio Unitario',1,1,'C',1);


$pdf->SetFont('Arial','',9);

while ($row=$resultado->fetch_assoc())
{
$pdf->Cell(20,6,$row['producto_id'],1,0,'C');
$pdf->Cell(70,6,utf8_decode($row['producto_descripcion']),1,0,'C');
$pdf->Cell(40,6,$row['producto_unidad'],1,0,'C');
$pdf->Cell(60,6,$row['producto_precio'],1,1,'C');

}

$pdf->Output();
?>