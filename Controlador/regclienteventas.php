<?php 
session_start();
require('conec.php');
$idc=$_POST['idc'];
$varnombre=$_POST['nombre'];
$varapellido=$_POST['apellido'];
$varfenac=$_POST['fenac'];
$vardomi=$_POST['domi'];
$vartel=$_POST['tel'];
$varcoel=$_POST['coel'];
$varrasocial=$_POST['rasocial'];
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
$qs="UPDATE cliente 
	 SET idcliente = '$idc' ,
	 	 nombres ='$varnombre' ,
	 	 apellidos ='$varapellido',
	 	 fenac ='$varfenac' ,
	 	 domicilioper ='$vardomi' ,
	 	 telefonoper ='$vartel' ,
	 	 correoper ='$varcoel' ,
		 razon ='$varrasocial' ,
		 rfc ='$varrfc' ,
		 calle ='$varcalle' ,
		 numero ='$varnumero' ,
		 colonia ='$varcolonia' ,
		 localidad ='$varlocalidad' ,
		 referencia ='$varreferencia' ,
		 municipio ='$varmunicipio' ,
		 pais ='$varpais' ,
		 estado ='$varedo' ,
		 codpos ='$varcodpos' 
	 WHERE idcliente='$idc'";	
/*	 
$q= "INSERT INTO cliente (
							idcliente,nombres,apellidos,fenac,domicilioper,telefonoper,correoper,
							razon,rfc,calle,numero,colonia,localidad,referencia,municipio,pais,estado,codpos,asignadoa) 
				  values (  '','$idc','$varnombre','$varapellido','$varfenac','$vardomi',
				  			'$vartel','$varcoel','$varrasocial','$varrfc','$varcalle','$varnumero',
				  			'$varcolonia','$varlocalidad','$varreferencia','$varmunicipio','$varpais','$varedo','$varcodpos','')";*/
$ejecuta_q= mysqli_query($con,$qs) or die("error al insertar");



mysqli_close($con);
header("Location: ../Vista/Ventas/catalogo.php?idus=".$idc." ");
//}





?>