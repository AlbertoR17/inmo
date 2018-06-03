<?php 
			
require('../conec.php');

	//$idventa=$_POST['idventa'];
	$nombre=isset($_POST['nombre']) ? $_POST['nombre'] : $_POST['nombre'];
	$correo=isset($_POST['correo']) ? $_POST['correo'] : $_POST['correo'];
	$telefono=isset($_POST['telefono']) ? $_POST['telefono'] : $_POST['telefono'];
	//$mm=$_POST['mm'];
	//$aa=$_POST['aa'];
	$tipo=isset($_POST['tipo']) ? $_POST['tipo'] : $_POST['tipo'];
	$ciudad=isset($_POST['ciudad']) ? $_POST['ciudad'] : $_POST['ciudad'];

$direccion=isset($_POST['direccion']) ? $_POST['direccion'] : $_POST['direccion'];
$dimension=isset($_POST['dimension']) ? $_POST['dimension'] : $_POST['dimension'];

	
$q= "INSERT INTO pruebaenvicliente (  idenvi,nombre,correo,telefono,tipo,ciudad,direccion,
							dimencion) 
				  values (  '','$nombre','$correo','$telefono','$tipo',
				  			'$ciudad','$direccion','$dimension')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar");

mysqli_close($con);

	if ($ejecuta_q) 
	{
		echo "true";
		
	}
	else
	{
		echo "false";
	}


header("Location: ../../Vista/Admin/finalizaradmin.php");
 ?>