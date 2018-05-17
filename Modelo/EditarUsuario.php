<?php

$nombre  = $_POST['Nombre'];
$apellido     = $_POST['Apellido'];
$correo   = $_POST['Correo'];
$telefono   = $_POST['Telefono'];
$tipouser     = $_POST['Tipouser'];

if (!empty($idusuario)) {
	


$q = ("UPDATE usuarios set nombres='$nombres',apellidos='$apellidos',telefono='$telefono',correo='$correo',pass='$pass',tipouser='$tipouser',nbrigada='$nbrigada' where id_usuario='" . $id_usuario . "'");

$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");
}
header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";