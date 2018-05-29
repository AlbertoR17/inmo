<?php 
	
require('conec.php');

$id=$_GET['idt'];
//echo $id;

mysqli_query($con, "DELETE FROM terrenos WHERE idterreno = '$id'");

header("Location: ../Vista/Admin/catalogoadmin2.php");

 ?>