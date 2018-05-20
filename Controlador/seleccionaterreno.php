<?php 
$iduser=$_GET['idu'];
$idter=$_GET['idt'];

require('../../Controlador/conec.php');
$consultaterreno = mysqli_query($con, "SELECT * FROM terrenos where $iduser");
$resultadoterreno = mysqli_fetch_array($consultaterreno);
$idterreno=$row['idterreno']; 
$codterreno=$row['codterreno'];
$zona=$row['zona'];  
$domicilio=$row['domicilio']; 
$codpostal=$row['codpostal'];
$ciudad=$row['ciudad'];
$dimension=$row['dimension'];
$precio=$row['precio'];
$descripcion=$row['descripcion'];
$status=$row['status'];

$consultauser = mysqli_query($con, "SELECT * FROM cliente where $iduser");
$resultadouser = mysqli_fetch_array($consultauser);

$varidcliente=$_POST['idcliente'];
$varnombre=$_POST['nombres'];
$varapellido=$_POST['apellidos'];
$varfenac=$_POST['fenac'];
$vardomi=$_POST['domicilioper'];
$vartel=$_POST['telefonoper'];
$varcoel=$_POST['correoper'];
$varrasocial=$_POST['razon'];
$varrfc=$_POST['rfc'];
$varcalle=$_POST['calle'];
$varnumero=$_POST['numero'];
$varcolonia=$_POST['colonia'];
$varlocalidad=$_POST['localidad'];
$varreferencia=$_POST['referencia'];
$varmunicipio=$_POST['municipio'];
$varpais=$_POST['pais'];
$varedo=$_POST['edo'];
$varcodpos=$_POST['codpos'];
$asignadoa=$_POST['asignadoa'];

$q= "INSERT INTO preventa(
							idcliente,nombres,apellidos,fenac,domicilioper,telefonoper,correoper,
							razon,rfc,calle,numero,colonia,localidad,referencia,municipio,pais,estado,codpos,asignadoa,idterreno,codterreno,zona,domicilio,codpostal,ciudad,dimension,precio,descripcion,status) 
				  values (  '','$varnombre','$varapellido','$varfenac','$vardomi',
				  			'$vartel','$varcoel','$varrasocial','$varrfc','$varcalle','$varnumero',
				  			'$varcolonia','$varlocalidad','$varreferencia','$varmunicipio','$varpais','$varedo','$varcodpos',
				  			'$asignadoa','$idterreno','$codterreno','$zona','$domicilio','$codpostal','$ciudad','$dimension','$precio','$descripcion','$status')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../../Vista/Admin/registrar.php');










?>