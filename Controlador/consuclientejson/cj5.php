<?php 
			
require('../conec.php');

	//$idventa=$_POST['idventa'];
	$elcliente=isset($_GET['cliente']) ? $_GET['cliente'] : $_GET['cliente'];

	$consultaclie = mysqli_query($con, "SELECT * FROM preventa where nombrecom='$elcliente'");

$resultadocli = mysqli_fetch_array($consultaclie);

$data["datitos"][] = $resultadocli;

/*$nombrecom=$resultadocli['nombrecom']; 
$correoper=$resultadocli['correoper'];
$telefonoper=$resultadocli['telefonoper'];  
$ciudad=$resultadocli['ciudad']; 
$dimension=$resultadocli['dimension'];
$domicilio=$resultadocli['domicilio'];
$tipo=$resultadocli['tipo'];

$datos = array(
	"nombrecompleto"=>$nombrecom,
	"correo"=>$correoper,
	"telefono"=>$telefonoper,
	"ciudad"=>$ciudad,
	"dimension"=>$dimension,
	"domicilio"=>$domicilio,
	"tipo"=>$tipo
);
	*/




 echo json_encode($data);

mysqli_close($con);
 ?>