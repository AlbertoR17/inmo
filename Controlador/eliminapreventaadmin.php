<?php 
	
require('conec.php');

$id=$_GET['id'];
//echo $id;

mysqli_query($con, "DELETE FROM preventa WHERE idventa = $id");

header("Location: ../Vista/Ventas/clientelistopagoadmin.php");
?>