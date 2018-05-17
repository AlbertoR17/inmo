<?php
include("../Controlador/conec.php");

$nombres     = $_POST['nombres'];
$apellidos   = $_POST['apellidos'];
$telefono   = $_POST['telefono'];
$correo     = $_POST['correo'];
$pass      = $_POST['pass'];
$tipouser      = $_POST['tipouser'];


$q = ("INSERT INTO usuario(idusuario,nombre,apellido,correo,contrasena,telefono,tipouser) VALUES ('','$nombres','$apellidos','$correo','$pass','$telefono','$tipouser')");
$ejecutar_q = mysqli_query($con, $q) or die("error al insertar");
header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";
