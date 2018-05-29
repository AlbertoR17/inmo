<?php 
			
require('../conec.php');

	//$idventa=$_POST['idventa'];
	$elcliente=isset($_GET['cliente']) ? $_GET['cliente'] : $_GET['cliente'];

	$consultaclie = mysqli_query($con, "SELECT * FROM preventa where nombrecom='$elcliente'");

$resultadocli = mysqli_fetch_array($consultaclie);

$nombrecom=$resultadocli['nombrecom']; 
$correoper=$resultadocli['correoper'];
$telefonoper=$resultadocli['telefonoper'];  
$ciudad=$resultadocli['ciudad']; 
$dimension=$resultadocli['dimension'];
$domicilio=$resultadocli['domicilio'];
$tipo=$resultadocli['tipo'];


$datos = new stdClass();
	$datos->nombrecompleto=$nombrecom;
	$datos->correo=$correoper;
	$datos->telefono=$telefonoper;
	$datos->ciudad=$ciudad;
	$datos->dimension=$dimension;
	$datos->domicilio=$domicilio;
	$datos->tipo=$tipo;

	




$json=json_encode($datos);
echo $json;
mysqli_close($con);
 ?>