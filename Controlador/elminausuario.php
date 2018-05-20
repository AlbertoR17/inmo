<?php 
	
require('conec.php');

$id=$_GET['id'];
//echo $id;

mysqli_query($con, "DELETE FROM usuario WHERE idusuario = $id");

header("Location: ../Vista/Admin/usuarios.php");
?>