<?php 
session_start();




$idvta=$_SESSION['idv'];

require('../../Controlador/conec.php');
$nomcli = mysqli_query($con, "SELECT nombres,apellidos FROM preventa WHERE idventa='$idvta'");

 $row = mysqli_fetch_array($nomcli);
 $nombrecom=$row['nombres']." ".$row['apellidos'] ;
                      
//$ejecuta_q= mysqli_query($con,$qs) or die("error al insertar");


//echo $idvta;


$qs="UPDATE preventa SET pagoconfirmado=1, 
						 nombrecom='$nombrecom'
				   WHERE idventa='$idvta'";	

$ejecuta_q= mysqli_query($con,$qs) or die("error al insertar");






mysqli_close($con);
header("Location: finalizar.php ");




















 ?>