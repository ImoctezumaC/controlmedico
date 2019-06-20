<?php
include 'plantilla.php';
require 'conexion.php';
$id=$_GET['id'];

$query="SELECT nombre,apellido1,apellido2,fechNacimiento,sexoPaciente,alergia,tipoAlergia,alcoholismo, tabaquismo, toxicomania,comorbilidades,nombreCompleto, especialidadMed,noCedulaProfesional, notaurgencias.* FROM dtpaciente,notaurgencias,dtpersonal WHERE dtpaciente.idPaciente=notaurgencias.idPaciente AND dtpersonal.idPersonal=notaurgencias.idEsp AND idNota='$id' ";

$resultado=$mysqli->query($query);


$pdf= new PDF('L','mm','Letter');

$pdf->AliasNbPages();
$pdf->SetTopMargin(10);
$pdf->addPage();


//datos generales del paciente
$pdf->SetDrawColor(50,50,50);
//linea superior
$pdf->Line(10,50, 260,50);


$row=$resultado->fetch_assoc();




$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,50);
$pdf->Cell(15,6,"Nombre del paciente:",0,1,'L');
$pdf->SetXY(50,50);
$pdf->SetFont('Arial','',9);

$pdf->Cell(15,6,$row['nombre'],0,1,'C');
$pdf->SetXY(80,50);
$pdf->Cell(15,6,$row['apellido1'],0,1,'C');
$pdf->SetXY(120,50);
$pdf->Cell(15,6,$row['apellido2'],0,1,'C');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(160,50);
$pdf->Cell(15,6,"No. cama:",0,1,'L');
$pdf->SetXY(200,50);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15,6,utf8_decode($row['numCama']),0,1,'C');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,60);
$pdf->Cell(15,6,"Edad:",0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->SetXY(21,60);
$pdf->Cell(15,6,$row['edadPaciente'],0,1,'C');



$pdf->SetFont('Arial','B',9);
$pdf->SetXY(40,60);
$pdf->Cell(15,6,"Sexo:",0,1,'L');
$pdf->SetXY(60,60);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15,6,$row['sexoPaciente'],1,1,'C');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(100,60);
$pdf->Cell(15,6,"Fecha de Registro:",0,1,'L');
$pdf->SetXY(130,60);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,6,$row['fechaReg'],1,1,'C');


$pdf->SetFont('Arial','B',9);
$pdf->SetXY(160,60);
$pdf->Cell(10,6,"Comorbilidades:",0,1,'L');
$pdf->SetXY(190,60);
$pdf->SetFont('Arial','',9);
$pdf->Cell(70,6,$row['comorbilidades'],1,1,'C');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(10,70);
$pdf->Cell(15,6,"Alergia:",0,1,'L');
$pdf->SetXY(23,70);
$pdf->Cell(15,6,$row['alergia'],1,1,'C');

$pdf->SetXY(40,70);
$pdf->Cell(220,6,"Alergia a:",0,1,'L');
$pdf->SetXY(57,70);
$pdf->SetFont('Arial','',9);
$pdf->Cell(39,6,$row['tipoAlergia'],1,1,'C');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(100,70);
$pdf->Cell(10,6,"Alcoholismo:",0,1,'L');
$pdf->SetXY(122,70);
$pdf->Cell(15,6,$row['alcoholismo'],1,1,'C');

$pdf->SetXY(140,70);
$pdf->Cell(15,6,"Tabaquismo:",0,1,'L');
$pdf->SetXY(162,70);
$pdf->Cell(15,6,$row['tabaquismo'],1,1,'C');

$pdf->SetXY(180,70);
$pdf->Cell(20,6,utf8_decode("toxicomanía:"),0,1,'L');
$pdf->SetXY(202,70);
$pdf->Cell(15,6,$row['toxicomania'],1,1,'C');

//lìnea inferior
$pdf->SetDrawColor(50,50,50);
$pdf->Line(10,80, 260,80);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',9);

$pdf->SetXY(10,80);
$pdf->Cell(10,6,"Medicamentos que ingiere el paciente:",0,1,'L');
$pdf->SetXY(10,85);
$pdf->Cell(30,12,$row['medicamentosP'],0,1,'L');

$pdf->SetXY(10,95);
$pdf->Cell(15,6,utf8_decode("Presentación del caso:"),0,1,'L');
$pdf->SetXY(10,100);
$pdf->Cell(250,24,$row['presentacion'],1,1,'L');

$pdf->SetXY(10,125);
$pdf->Cell(20,6,"Subjetivo:",0,1,'L');
$pdf->SetXY(10,130);
$pdf->Cell(250,24,$row['subjetivo'],1,1,'L');


$pdf->SetXY(10,155);
$pdf->Cell(10,6,"Objetivo:",0,1,'L');
$pdf->SetXY(10,160);
$pdf->Cell(250,24,$row['objetivo'],1,1,'L');


//$pdf->SetXY(30,250);
$pdf->Ln(0);

$pdf->addPage();
$pdf->SetXY(10,40);
$pdf->Cell(15,6,"Signos vitales:",0,1,'L');
$pdf->SetXY(10,45);
$pdf->Cell(250,18,$row['signosV'],1,1,'L');

$pdf->SetXY(10,70);
$pdf->Cell(15,6,utf8_decode("Análisis:"),0,1,'L');
$pdf->SetXY(10,75);
$pdf->Cell(250,24,$row['analisis'],1,1,'L');

$pdf->SetXY(10,100);
$pdf->Cell(15,6,utf8_decode("Diagnóstico:"),0,1,'L');
$pdf->SetXY(10,105);
$pdf->Cell(250,12,$row['diagnostico'],1,1,'L');

$pdf->SetXY(10,118);
$pdf->Cell(15,6,utf8_decode("Plan de manejo:"),0,1,'L');
$pdf->SetXY(10,120);
$pdf->Cell(250,12,$row['planManejo'],1,1,'L');

$pdf->SetXY(10,135);
$pdf->Cell(10,6,"CIE10:",0,1,'L');
$pdf->SetXY(30,135);
$pdf->Cell(200,6,utf8_decode($row['tipoCIE10']),1,1,'L');


$pdf->SetXY(10,140);
$pdf->Cell(15,6,utf8_decode("Pronóstico:"),0,1,'L');
$pdf->SetXY(10,145);
$pdf->Cell(250,24,$row['pronostico'],1,1,'L');


$pdf->SetFont('Arial','B',10);
$pdf->SetXY(110,175);
//$pdf->Cell(15,6,"Nombre del Especialista:",0,1,'L');
$pdf->Cell(15,6,$row['nombreCompleto'],0,0,'L');

$pdf->SetXY(110,180);
//$pdf->Cell(15,6,"Especialidad:",0,1,'L');
$pdf->Cell(15,6,$row['especialidadMed'],0,0,'L');

$pdf->SetFont('Arial','',9);
$pdf->SetXY(110,185);
$pdf->Cell(15,6,utf8_decode("Núm de cédula:"),0,1,'L');
$pdf->SetXY(135,185);
$pdf->Cell(15,6,$row['noCedulaProfesional'],0,0,'L');


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