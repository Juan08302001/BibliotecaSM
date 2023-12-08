<?php
	include 'plantilla2.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM reserva";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage("landscape");
	
	$pdf->SetFillColor(228, 100, 0);
      $pdf->SetDrawColor(163, 163, 163); //colorBorde
      $pdf->SetFont('Arial', 'B', 11);
      $pdf->Cell(10, 10, utf8_decode('Id°'), 1, 0, 'C', 1);
      $pdf->Cell(30, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
      $pdf->Cell(40, 10, utf8_decode('Apellido Paterno'), 1, 0, 'C', 1);
      $pdf->Cell(40, 10, utf8_decode('Apellido Materno'), 1, 0, 'C', 1);
	  $pdf->Cell(40, 10, utf8_decode('Domicilio'), 1, 0, 'C', 1);
      $pdf->Cell(40, 10, utf8_decode('Nombre del libro'), 1, 0, 'C', 1);
      $pdf->Cell(20, 10, utf8_decode('Editorial'), 1, 0, 'C', 1);
      $pdf->Cell(40, 10, utf8_decode('Fecha de reserva'), 1, 1, 'C', 1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,10,utf8_decode($row['idreserva']), 1, 0, 'C', 0);
		$pdf->Cell(30,10,utf8_decode($row['nombre']), 1, 0, 'C', 0);
		$pdf->Cell(40,10,utf8_decode($row['apepat']), 1, 0, 'C', 0);
		$pdf->Cell(40,10,utf8_decode($row['apemat']), 1, 0, 'C', 0);
        $pdf->Cell(40,10,utf8_decode($row['domicilio']), 1, 0, 'C', 0);
        $pdf->Cell(40,10,utf8_decode($row['nombrelibro']), 1, 0, 'C', 0);
		$pdf->Cell(20,10,utf8_decode($row['editorial']), 1, 0, 'C', 0);
		$pdf->Cell(40,10,utf8_decode($row['fecha_reserva']),1,1,'C');
	}
	$pdf->Output();
?>
