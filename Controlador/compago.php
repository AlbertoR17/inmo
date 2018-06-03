<?php 
session_start();
$id=$_POST['idc'];
//echo $id;
	/*$min=1000;
	$max=9999;
	$num=range($min,$max);
	
	echo json_encode($num);
*/
	require '../Controlador/fpdf181/fpdf.php';
	require('conec.php');
	$rss = mysqli_query($con, "SELECT * FROM preventa where idventa='$id'");
	$row = mysqli_fetch_array($rss);

	$nombre=$row['nombrecom'];
	$calle=$row['calle'];
	$numero=$row['numero'];
	$colonia=$row['colonia'];
	$municipio=$row['municipio'];
	$edo=$row['edo'];
	$pais=$row['pais'];
	$razon=$row['razon'];
	$rfc=$row['rfc'];
	$codterreno=$row['codterreno'];
	$precio=$row['precio'];
	$descripcion=$row['descripcion'];
	$domicilio=$row['domicilio'];
	$dimension=$row['dimension'];
	
	//$todoeldomfiscal= '.$calle.' '.$numero.' '.$colonia.' '.$municipio.' '.$edo.' '.$pais.';
	



	date_default_timezone_set('America/Hermosillo');
	$fechaventa= date('Y-m-d');
	$anio = substr($fechaventa, 0, 4); 
	$mes = substr($fechaventa, 5, 2); 
	$dia = substr($fechaventa, 8); 
	if ($mes=='01') {
		$mesletra='Enero';
	}elseif ($mes=='02') {
		$mesletra='Febrero';
	}elseif ($mes=='03') {
		$mesletra='Marzo';
	}elseif ($mes=='04') {
		$mesletra='Abril';
	}elseif ($mes=='05') {
		$mesletra='Mayo';
	}elseif ($mes=='06') {
		$mesletra='Junio';
	}elseif ($mes=='07') {
		$mesletra='Julio';
	}elseif ($mes=='08') {
		$mesletra='Agosto';
	}elseif ($mes=='09') {
		$mesletra='Septiembre';
	}elseif ($mes=='10') {
		$mesletra='Octubre';
	}elseif ($mes=='11') {
		$mesletra='Noviembre';
	}elseif ($mes=='12') {
		$mesletra='Diciembre';
	} 



	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial', '', 10);
	$pdf->Image('../Content/img/logo.png' , 15 ,10, 50 , 20,'PNG');
	$pdf->Cell(0, 20, '', 1);
	$pdf->Cell(-200, 10, '  FACTURA ', 0,1,'C');
//$pdf->Cell(0, 1, '  INMOBILIARIA ', 0,1,'R');
	$pdf->Cell(0, 5, '  FOLIO FISCAL ', 0,1,'R');
	$pdf->Cell(0, 5, '  FR5S-6ADF-5647-4FGS-TRS4-TE987546321 ', 0,1,'R');
	$pdf->SetFont('Arial', '', 9);

//$pdf->Cell(50, 10, ''.date('l jS \of F Y h:i:s A').'', 0);
	$pdf->Cell(0, -1, '___________________________________________________________________________________________________________', 0,1,'L');
	$pdf->Cell(0, 40, '  DOMICILIO FISCAL', 0,1,'L');
	$pdf->Cell(0,-30, '  '.$calle.' '.$numero.' '.$colonia.' '.$municipio.' '.$edo.' '.$pais.' ', 0,1,'L');
	$pdf->Cell(0, 40, '___________________________________________________________________________________________________________', 0,1,'L');
	$pdf->Cell(0, -30, '  ', 0,1,'L');
	$pdf->Cell(0, 50, '  NOMBRE:'.$razon.'', 0,1,'L');


	$pdf->Cell(0, -40, '  CDFI: 001 Aquisición de terreno', 0,1,'L');
	$pdf->Cell(0,30, '  DIRECCIÓN: '.$calle.' '.$numero.' '.$colonia.' '.$municipio.' '.$edo.' '.$pais.'', 0,1,'R');
	$pdf->Cell(0, -20, '  RFC:'.$rfc.'', 0,1,'R');
	$pdf->Cell(0, 40, '  CLAVE ', 0,1,'L');
	$pdf->Cell(45, -40, '  CANTIDAD ', 0,1,'C');
	$pdf->Cell(94, 40, '  DESCRIPCIÓN ', 0,1,'C');
	$pdf->Cell(0, -40, '  IMPORTE ', 0,1,'R');
//DATOS DEL TERRENO
	$pdf->Cell(0, 50, ' '.$codterreno.' ', 0,1,'L');
	$pdf->Cell(45, -50, '  1.00 ', 0,1,'C');
	$pdf->Cell(160, 50, ' Terreno con tamaño de '.$dimension.'M2 ubicado en '.$domicilio.'', 0,1,'C');
	$pdf->Cell(0, -50, '  '.$precio.'.00 ', 0,1,'R');
/*$pdf->Cell(0, 10, '  _________________________________________ ', 0,1,'C');
$pdf->Cell(0, 10, '  FIRMA Y SELLO ', 0,1,'C');
*/
$pdf->Cell(0, 100, '  TOTAL: '.$precio.' ', 0,1,'L');
$pdf->Cell(0, -90, '  MONEDA: MXN ', 0,1,'L');
$pdf->Cell(0, 100, '  CONDICION DEL PAGO: Contado ', 0,1,'L');
$pdf->Cell(0, -90, '  FORMA DE PAGO: Transferencia electrónica ', 0,1,'L');

$iva=$precio*.16;
$sub=$precio-$iva;

$pdf->Cell(168, 100, '  SUBTOTAL:                ', 0,1,'R');
$pdf->Cell(168.5, -90, '  DESCUENTO:             ', 0,1,'R');
$pdf->Cell(159, 100, '  IVA:                   ', 0,1,'R');
$pdf->Cell(163, -90, '  TOTAL:                   ', 0,1,'R');

$pdf->Cell(0, 60, ' '.$sub.' ', 0,1,'R');
$pdf->Cell(0, -50, ' 0.00 ', 0,1,'R');
$pdf->Cell(0, 60, ' '.$iva.' ', 0,1,'R');
$pdf->Cell(0, -50, ' '.$precio.'.00 ', 0,1,'R');
/**/
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(0, 120, '________________________________________________________________________________________________________________________', 0,1,'L');
$pdf->Cell(0, -110, 'Esto es solo una reprecentacion impresa del CDFI (Motivos escolares con datos falsos)', 0,1,'C');

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);

$pdf->Output();









?>