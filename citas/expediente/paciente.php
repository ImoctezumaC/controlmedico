<?php
include 'plantilla.php';
require 'conexion.php';
//$id=$_GET['id'];

$query="SELECT  * FROM dtpaciente WHERE idPaciente=10";

$resultado=$mysqli->query($query);


//$pdf= new PDF('P','mm','Letter');
$pdf= new PDF('P','mm','Letter');

$pdf->AliasNbPages();
$pdf->SetTopMargin(10);
$pdf->addPage();


//datos generales del paciente
$pdf->SetDrawColor(50,50,50);
//linea superior
$pdf->Line(10,40, 190,40);
$pdf->SetFont('Arial','B',20);
$pdf->SetXY(60,25);

$pdf->Cell(20,15,utf8_decode('Registro del paciente'),0,0,'C');

$row=$resultado->fetch_assoc();




$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,45);
$pdf->Cell(15,6,"Nombre:",0,1,'L');
$pdf->SetXY(60,45);
$pdf->SetFont('Arial','',12);

$pdf->Cell(15,6,$row['nombre'],0,1,'C');
$pdf->SetXY(110,45);
$pdf->Cell(15,6,$row['apellido1'],0,1,'C');
$pdf->SetXY(160,45);
$pdf->Cell(15,6,$row['apellido2'],0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,50);
$pdf->Cell(15,6,"fecha de Nacimiento:",0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->SetXY(60,50);
$pdf->Cell(15,6,$row['fechNacimiento'],0,1,'C');



$pdf->SetFont('Arial','B',12);
$pdf->SetXY(90,50);
$pdf->Cell(15,6,"Sexo:",0,1,'L');
$pdf->SetXY(110,50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(15,6,$row['sexoPaciente'],0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(130,50);
$pdf->Cell(15,6,"RFC:",0,1,'L');
$pdf->SetXY(145,50);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,6,$row['rfcPaciente'],0,1,'C');


$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,55);
$pdf->Cell(20,6,utf8_decode("Dirección:"),0,1,'L');
$pdf->SetXY(30,55);
$pdf->SetFont('Arial','',12);
$pdf->Cell(100,6,$row['dirCalleNum'],0,1,'C');
$pdf->SetXY(140,55);
$pdf->Cell(70,6,$row['coloniaPaciente'],0,1,'C');
$pdf->SetXY(10,60);
$pdf->Cell(40,6,$row['mpioPaciente'],0,1,'C');
$pdf->SetXY(80,60);
$pdf->Cell(30,6,$row['estado'],0,1,'C');
$pdf->SetXY(140,60);
$pdf->Cell(20,6,$row['pais'],0,1,'C');
$pdf->SetXY(180,60);
$pdf->Cell(10,6,$row['cpPaciente'],0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,65);
$pdf->Cell(30,6,"Nacionalidad:",0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(30,65);
$pdf->Cell(40,6,$row['nacionalidad'],0,1,'C');


$pdf->SetFont('Arial','B',12);
$pdf->SetXY(10,75);
$pdf->Cell(10,6,"Alergia:",0,1,'L');
$pdf->SetXY(28,75);
$pdf->Cell(10,6,$row['alergia'],1,1,'L');

$pdf->SetXY(40,75);
$pdf->Cell(20,6,"Alergia a:",0,1,'L');
$pdf->SetXY(60,75);
$pdf->SetFont('Arial','',9);
$pdf->Cell(100,6,$row['tipoAlergia'],0,1,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,80);
$pdf->Cell(10,6,"Alcoholismo:",0,1,'L');
$pdf->SetXY(40,80);
$pdf->Cell(15,6,$row['alcoholismo'],1,1,'C');

$pdf->SetXY(60,80);
$pdf->Cell(15,6,"Tabaquismo:",0,1,'L');
$pdf->SetXY(80,80);
$pdf->Cell(15,6,$row['tabaquismo'],1,1,'C');

$pdf->SetXY(100,80);
$pdf->Cell(20,6,utf8_decode("toxicomanía:"),0,1,'L');
$pdf->SetXY(120,80);
$pdf->Cell(15,6,$row['toxicomania'],1,1,'C');



$pdf->SetFont('Arial','',12);

$pdf->SetXY(10,90);
$pdf->Cell(10,6,utf8_decode("Grupo Étnico:"),0,1,'L');
$pdf->SetXY(20,100);
$pdf->Cell(180,24,$row['gpoEtnico'],1,1,'L');

$pdf->SetXY(10,130);
$pdf->Cell(15,6,utf8_decode("Problemas Heredo:"),0,1,'L');
$pdf->SetXY(20,140);
$pdf->Cell(180,24,$row['heredoFamiliares'],1,1,'L');

/*$pdf->SetXY(10,200);
//$pdf->SetFillColor(232,232,232);
//$pdf->SetFont('Arial','B',12);
$pdf->Cell(15,6,'idNota',1,0,'C',1);
$pdf->Cell(70,6,'Nombre',1,0,'C',1);
$pdf->Cell(15,6,'Edad',1,1,'C',1);
*/

$pdf->SetXY(10,105);
$pdf->SetFont('Arial','',9);

/*
while ($row=$resultado->fetch_assoc())
{

$pdf->Cell(15,6,$row['idPaciente'],1,0,'C');

$pdf->Cell(70,6,utf8_decode($row['nombre']),1,0,'C');
$pdf->Cell(15,6,$row['apellido1'],1,1,'C');

}

$pdf->Output();
*/

$pdf->Output();
?>