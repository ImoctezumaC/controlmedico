<?php
require '../assets/fpdf/fpdf.php';

class PDF extends FPDF
{
	function Header()
	{
		$this->Image('../assets/images/mbr-182x102.jpg',5,5,30);
		
		$this->SetFont('Arial','B',15);
		$this->SetXY(50,10);
		$this->Cell(20,10,utf8_decode('Centro Médico Costa Esmeralda S.A.P.I. de C.V.'),0,0,'L');
		
		$this->SetFont('Arial','',8);
		$this->SetXY(40,15);
		 $this->Cell(20,10,utf8_decode('Domicilio: Cuarta Poniente n. 102, Centro, Puerto Escondido, Oaxaca, tel: 9541452322, email:cmce@gmail.com'),0,0,'L');
		 
		 $this->SetFont('Arial','B',12);
		 $this->SetXY(60,25);
		
        $this->Cell(20,10,utf8_decode('Productos'),0,0,'C');
        $this->Ln(20);

	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/ {nb}',0,0,'C');
	}
}

