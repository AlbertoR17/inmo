<?php
include("../Controlador/conec.php");

$nombres     = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$correo     = $_POST['correo'];
$asignadoa      = $_POST['asignadoa'];

$q ="INSERT INTO cliente (
							idcliente,nombres,apellidos,fenac,domicilioper,telefonoper,correoper,
							razon,rfc,calle,numero,colonia,localidad,referencia,municipio,pais,estado,codpos,asignadoa) 
				  values (  '','$nombres','$apellidos','','',
				  			'$telefono','$correo','','','','',
				  			'','','','','','','','$asignadoa')";
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
header("location: ../Vista/Admin/preregistroadmin.php");
echo "<br> Registro Insertado Correctamente! <br>";
