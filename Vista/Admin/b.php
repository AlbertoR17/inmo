<?php 

$id = $_GET['i'];


require('../../Controlador/conec.php');
$result=mysqli_query($con, "SELECT * FROM usuario WHERE idusuario = '$id'");
$row=mysqli_fetch_assoc($result);


 $nombre   = $row["nombre"];
 $apellidos = $row["apellido"];
$tipouser     = $row['tipouser'];
$id_usuario  = $row['idusuario'];
$correo   = $row['correo'];
$password = $row['contrasena'];
/*echo $nombre;
echo $apellidos;
echo $tipouser;
echo $id_usuario;
echo $correo;
echo $password;
*/

if ($tipouser === "Administrador") {
    if ($row["correo"] === $correo && $row["contrasena"] === $password) {
        session_start();
         $_SESSION["nombre"]   = $nombre;
         $_SESSION["apellido"] = $apellidos;
        $_SESSION["idusuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: http://localhost:8080/inmo/Vista/Admin/envio.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/Login.php?error=1");
        exit();
    }
}






 ?>