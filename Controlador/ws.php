<?php 

$ejemplo = array(
	"nombre" => $_GET['nombre'],
	"nombre" => $_GET['correo'],
	"nombre" => $_GET['telefono'],
	"nombre" => $_GET['tipo'],
	"nombre" => $_GET['ciudad'],
	"nombre" => $_GET['direccion'],
	"nombre" => $_GET['dimension']
);

echo json_encode($ejemplo);
/*session_start();
//$id=$_GET['id'];
//echo $id;

require('conec.php');
$rss = mysqli_query($con, "SELECT * FROM preventa");

$row = mysqli_fetch_array($rss);
    $tipin="Hotel";              
    $idclien=$row['idcliente'];
	$nombrecom=$row['nombrecom'];
	$correoper=$row['correoper'];
	$telefonoper=$row['telefonoper']; 
	$ciudad=$row['ciudad']; 
	$domicilio=$row['domicilio']; 
	$dimensiones=$row['dimension']; 

$arr = array('tipo' => $tipin,
             'idclien' => $idclien,
             'nombrecom' => $nombrecom,
             'correoper' => $correoper,
             'telefonoper' => $telefonoper,
             'ciudad' => $ciudad,
             'domicilio' => $domicilio,
             'dimensiones' => $dimensiones,
);
mysqli_close($con);
echo json_encode($arr);


*/
 ?>