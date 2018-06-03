<?php 
session_start();




$idvta=$_SESSION['idv'];

require('../../Controlador/conec.php');
$nomcli = mysqli_query($con, "SELECT nombres,apellidos FROM preventa WHERE idventa='$idvta'");

 $row = mysqli_fetch_array($nomcli);
 $nombrecom=$row['nombres']." ".$row['apellidos'] ;
/*                      
//$ejecuta_q= mysqli_query($con,$qs) or die("error al insertar");
$destino=isset($_POST['destino']) ? $_POST['destino'] : $_POST['destino'];
  $precio=isset($_POST['precio']) ? $_POST['precio'] : $_POST['precio'];
  $nutar=isset($_POST['nutar']) ? $_POST['nutar'] : $_POST['nutar'];
  //$mm=$_POST['mm'];
  //$aa=$_POST['aa'];
  $cvc=isset($_POST['cvc']) ? $_POST['cvc'] : $_POST['cvc'];
  $titular=isset($_POST['titular']) ? $_POST['titular'] : $_POST['titular'];
//echo $idvta;
                       echo$destino ."</br>";
                       echo$precio ."</br>";
                       echo$nutar ."</br>";
                       echo$cvc ."</br>";
                       echo$titular ."</br>";
                        $fechacobro=$_SESSION['fechin'];
                        $horacobro=$_SESSION['horin'];
                        $nutar=$_SESSION['nutars'];
                        $destino=$_SESSION['destinok'];
                        $precio=$_SESSION['preciot'];
                        $titular=$_SESSION['nombrex'];
                        $idventa=$_SESSION['aidiventa'];
                       echo$fechacobro ."</br>";
                       echo$horacobro ."</br>";
                       echo$nutar ."</br>";
                       echo$destino ."</br>";
                       echo$precio ."</br>";
                       echo$titular ."</br>";
                       echo$idventa ."</br>";
                     
$q="INSERT INTO datospago (idcompra,idventa,destino,precio,nutar,titular,fechacobro,horacobro) 
		 values (  '','$idvta','$destino','$precio','$nutar','$titular','$fechacobro','$horacobro')";
$ejecuta_qs= mysqli_query($con,$q) or die("error al insertar");
                                                 
*/ 
$qs="UPDATE preventa SET pagoconfirmado=1, 
						 nombrecom='$nombrecom'
				   WHERE idventa='$idvta'";	

$ejecuta_q= mysqli_query($con,$qs) or die("error al realizar update");






mysqli_close($con);
header("Location: finalizar.php ");




















 ?>