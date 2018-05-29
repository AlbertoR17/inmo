<?php 
	
require('conec.php');

$id=$_GET['id'];
//echo $id;
$rs = mysqli_query($con, "SELECT idterreno,idcliente FROM preventa where idventa = '$id'");
                    
                    $row = mysqli_fetch_array($rs);


                     $idterreno=$row['idterreno']; 
                     $idcliente=$row['idcliente'];
                     


mysqli_query($con, "DELETE FROM preventa WHERE idventa = '$id'");

$qs="UPDATE cliente 
	 SET statuscli = 0 
	 WHERE idcliente='$idcliente'";	

$ejecuta_q2= mysqli_query($con,$qs) or die("error al insertar");

$qss="UPDATE terrenos 
	 SET status = 0 
	 WHERE idterreno='$idterreno'";	

$ejecuta_q3= mysqli_query($con,$qss) or die("error al insertar");

header("Location: ../Vista/Ventas/clientelistopago.php");
?>