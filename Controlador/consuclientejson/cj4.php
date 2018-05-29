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

echo "
<form action="">
<h3>Datos del cliente</h3>
<label>Nombre del cliente</label>
<input type='text' value='".$nombrecom."'><br>
<label>Correo</label>
<input type='text' value='".$correoper."'><br>
<label>Telefono</label>
<input type='text' value='".$telefonoper."'><br>
<h3>Datos del terreno</h3>
<label>Ciudad</label>
<input type='text' value='".$ciudad."'><br>
<label>Dimensiones</label>
<input type='text' value='".$dimension."'><br>
<label>Ubicación</label>
<input type='text' value='".$domicilio."'><br>
<label>Tipo del terreno</label>
<input type='text' value='".$tipo."'><br>
<input type='submit' value='guardar'>
</form>


";	




/*$json=json_encode($datos);
echo $json;*/
mysqli_close($con);
 ?>