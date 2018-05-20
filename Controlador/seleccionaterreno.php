<?php 
$idclie=$_GET['idc'];
$idter=$_GET['idt'];

require('conec.php');
$consultaterreno = mysqli_query($con, "SELECT * FROM terrenos where idterreno= '$idter'");
$resultadoterreno = mysqli_fetch_array($consultaterreno);
$idterreno=$resultadoterreno['idterreno']; 
$codterreno=$resultadoterreno['codterreno'];
$zona=$resultadoterreno['zona'];  
$domicilio=$resultadoterreno['domicilio']; 
$codpostal=$resultadoterreno['codpostal'];
$ciudad=$resultadoterreno['ciudad'];
$dimension=$resultadoterreno['dimension'];
$precio=$resultadoterreno['precio'];
$descripcion=$resultadoterreno['descripcion'];
$status=$resultadoterreno['status'];

$consultauser = mysqli_query($con, "SELECT * FROM cliente where idcliente='$idclie'");
$resultadocli = mysqli_fetch_array($consultauser);

$varidcliente=$resultadocli['idcliente'];
$varnombre=$resultadocli['nombres'];
$varapellido=$resultadocli['apellidos'];
$varfenac=$resultadocli['fenac'];
$vardomi=$resultadocli['domicilioper'];
$vartel=$resultadocli['telefonoper'];
$varcoel=$resultadocli['correoper'];
$varrasocial=$resultadocli['razon'];
$varrfc=$resultadocli['rfc'];
$varcalle=$resultadocli['calle'];
$varnumero=$resultadocli['numero'];
$varcolonia=$resultadocli['colonia'];
$varlocalidad=$resultadocli['localidad'];
$varreferencia=$resultadocli['referencia'];
$varmunicipio=$resultadocli['municipio'];
$varpais=$resultadocli['pais'];
$varedo=$resultadocli['edo'];
$varcodpos=$resultadocli['codpos'];
$asignadoa=$resultadocli['asignadoa'];

$q= "INSERT INTO preventa(  idventa,idcliente,nombres,apellidos,fenac,domicilioper,telefonoper,correoper,
							razon,rfc,calle,numero,colonia,localidad,referencia,municipio,pais,edo,
							codpos,asignadoa,idterreno,codterreno,zona,domicilio,codpostal,ciudad,
							dimension,precio,descripcion,status) 
				  values (  '','$varidcliente','$varnombre','$varapellido','$varfenac','$vardomi',
				  			'$vartel','$varcoel','$varrasocial','$varrfc','$varcalle','$varnumero',
				  			'$varcolonia','$varlocalidad','$varreferencia','$varmunicipio','$varpais',
				  			'$varedo','$varcodpos','$asignadoa','$idterreno','$codterreno','$zona',
				  			'$domicilio','$codpostal','$ciudad','$dimension',
				  			'$precio','$descripcion','$status')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar");

mysqli_close($con);
header('Location: ../Vista/Ventas/clientelistopago.php');










?>