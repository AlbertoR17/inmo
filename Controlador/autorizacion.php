<?php 
	
require('conec.php');

$id=$_GET['id'];
//echo $id;

$qss="UPDATE preventa 
	 SET autorizado = 1 
	 WHERE idventa='$id'";	

$ejecuta_q3= mysqli_query($con,$qss) or die("error al insertar");

header("Location: ../Vista/Admin/clientelistopagoadmin.php");
?>