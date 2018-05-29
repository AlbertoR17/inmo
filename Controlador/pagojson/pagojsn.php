<?php 
			
require('../conec.php');

	//$idventa=$_POST['idventa'];
	$destino=isset($_POST['destino']) ? $_POST['destino'] : $_POST['destino'];
	$precio=isset($_POST['precio']) ? $_POST['precio'] : $_POST['precio'];
	$nutar=isset($_POST['nutar']) ? $_POST['nutar'] : $_POST['nutar'];
	//$mm=$_POST['mm'];
	//$aa=$_POST['aa'];
	$cvc=isset($_POST['cvc']) ? $_POST['cvc'] : $_POST['cvc'];
	$titular=isset($_POST['titular']) ? $_POST['titular'] : $_POST['titular'];
	

	$destino1="1234567890123456";
	$precio1="16000000";
	$nutar1="4518642262019785";
	$cvc1="950";
	$titular1="Alberto Rodriguez";


	if (($destino==$destino1) and ($precio==$precio1) and ($nutar==$nutar1) and ($cvc==$cvc1) and ($titular==$titular1)) 
	{
		echo "true";
		
	}
	else
	{
		echo "false";
	}

	
	/*$datos=array(
	  "destino"=>$destino,
	  "titular"=>$titular,
	  "nutar"=>$nutar,   
	  "cvc"=>$cvc,
	  "precio"=>$precio	              
	  
	);
	
	$varjson= json_encode($datos);
*/
//echo $varjson;




	/*foreach ($res as $row) {
		$datos[]=$row;
	}*/
/*
	echo $precio;
	echo $nutar;
	echo $mm; "mm"=>$mm,
	  "aa"=>$aa,
	echo $aa;
	echo $cvc;
	echo $titular;
	*/
	//require('../conec.php');
	//$res=$con->query("SELECT * from preventa where idventa='$idventa'");
	//header("location: 192.168.0.18:8080/ws/index.php?id='$varjson'");

	/*$.post("localhost:8080/client-webser/indexin.php",$varjson,function(res){
		alert(res);
	});*/


	



 ?>