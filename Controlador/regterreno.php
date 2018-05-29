<?php 
session_start();
require('conec.php');

$codterreno=$_POST['codterreno'];
$tipo=$_POST['tipo'];
$zona=$_POST['zona'];
$domicilio=$_POST['domicilio'];
$codpostal=$_POST['codpostal'];
$ciudad=$_POST['ciudad'];
$dimension=$_POST['dimension'];
$precio=$_POST['precio'];
$descripcion=$_POST['descrip'];
$status=$_POST['status'];

$destino="../Content/img/terrenos/";
$imagens=$_FILES['imagen']['tmp_name'];
$nomimagen=$_FILES['imagen']['name'];
$ext= pathinfo($nomimagen);
move_uploaded_file($imagens, $destino."/".$codterreno.".".$ext['extension']);

/*$consulta="SELECT * from cliente where correoper=".$varcoel."";
$resultado=mysqli_query($con, $consulta) or die("error al insertar");
if (mysqli_fetch_assoc($resultado)>0)
{
	echo "<script language='JavaScript'>
                var mensaje = 'El usuario ya existe';
                alert(mensaje);
                </script>";
} else {
*/
$q= "INSERT INTO terrenos (  idterreno,codterreno,tipo,zona,domicilio,codpostal,ciudad,
							dimension,precio,descripcion,status) 
				  values (  '','$codterreno','$tipo','$zona','$domicilio',
				  			'$codpostal','$ciudad','$dimension','$precio','$descripcion','$status')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/Admin/registraterreno.php');
//}





?>