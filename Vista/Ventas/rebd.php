<?php 
			
require('../conec.php');
date_default_timezone_set('America/Hermosillo');


	//$idventa=$_POST['idventa'];
	$destino=isset($_POST['destino']) ? $_POST['destino'] : $_POST['destino'];
	$precio=isset($_POST['precio']) ? $_POST['precio'] : $_POST['precio'];
	$nutar=isset($_POST['nutar']) ? $_POST['nutar'] : $_POST['nutar'];
	//$mm=$_POST['mm'];
	//$aa=$_POST['aa'];
	$cvc=isset($_POST['cvc']) ? $_POST['cvc'] : $_POST['cvc'];
	$titular=isset($_POST['titular']) ? $_POST['titular'] : $_POST['titular'];
	$fechacobro=date('Y-m-d');
	$horacobro=date('h:i:s A',time());  

/*
	$destino1="1234567890123456";
	$precio1="16000000";
	$nutar1="4518642262019785";
	$cvc1="950";
	$titular1="Alberto Rodriguez";*/

	$q= "INSERT INTO cliente (
							idcompra,idventa,destino,precio,nutar,cvc,titular,fechacobro,horacobro) 
				  values (  '','$idventa','$destino','$precio','$nutar','$cvc','$titular','$fechacobro','$horacobro')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar");


 ?>