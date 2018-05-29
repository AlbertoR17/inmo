<?php 
session_start()
$idv=$_GET['id'];
echo $idv;
require('../conec.php');

$idvta=isset($_POST['idv']) ? $_POST['idv'] : $_POST['idv'];


$qs="UPDATE preventa 
	 SET pagoconfirmado = '1' ,
	 WHERE idventa='$idvta'";	

$ejecuta_q= mysqli_query($con,$qs) or die("error al insertar");






mysqli_close($con);




















 ?>