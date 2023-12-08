<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM libros";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(228, 100, 0);
      $pdf->SetDrawColor(163, 163, 163); //colorBorde
      $pdf->SetFont('Arial', 'B', 11);
      $pdf->Cell(10, 10, utf8_decode('Id°'), 1, 0, 'C', 1);
      $pdf->Cell(50, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
      $pdf->Cell(40, 10, utf8_decode('Editorial'), 1, 0, 'C', 1);
      $pdf->Cell(30, 10, utf8_decode('Edicion'), 1, 0, 'C', 1);
      $pdf->Cell(20, 10, utf8_decode('Paginas'), 1, 0, 'C', 1);
	  $pdf->Cell(40, 10, utf8_decode('Descriptores'), 1, 1, 'C', 1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,10,utf8_decode($row['idlibro']), 1, 0, 'C', 0);
		$pdf->Cell(50,10,utf8_decode($row['nombre']), 1, 0, 'C', 0);
		$pdf->Cell(40,10,($row['editorial']), 1, 0, 'C', 0);
		$pdf->Cell(30,10,utf8_decode($row['edicion']), 1, 0, 'C', 0);
		$pdf->Cell(20,10,utf8_decode($row['numpag']), 1, 0, 'C', 0);
		$pdf->Cell(40,10,utf8_decode($row['descriptores']), 1, 1, 'C', 0);
	}
	$pdf->Output();
?>
