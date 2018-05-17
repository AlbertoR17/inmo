
<?php
session_start();
unset($_SESSION["nombre"]);
$correo = trim($_POST['correo']);
$password = trim($_POST['contrasena']);



if (empty($correo) || empty($password)) {
    header("location: ../Vista/login.php");
    echo "";
    exit();

}

require('../Controlador/conec.php');

$query  = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$password'";
$result = mysqli_query($con, $query);
$row    = mysqli_fetch_assoc($result);
if (!isset($row)) {
    header("location: ../Vista/login.php");
}

 $nombres   = $row["nombre"];
 $apellidos = $row["apellido"];
$tipouser     = $row['tipouser'];
$id_usuario  = $row['idusuario'];
$correo   = $row['correo'];
$password = $row['contrasena'];

if ($tipouser === "Administrador") {
    if ($row["correo"] === $correo && $row["contrasena"] === $password) {
        session_start();
         $_SESSION["nombre"]   = $nombres;
         $_SESSION["apellido"] = $apellidos;
        $_SESSION["idusuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicio.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}else if ($tipouser === "Recepcion") {
    if ($row["correo"] === $correo && $row["contrasena"] === $password) {
        session_start();
         $_SESSION["nombres"]   = $nombres;
         $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/iniciorecepcion.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}else if ($tipouser === "Venta") {
    if ($row["correo"] === $correo && $row["contrasena"] === $password) {
        session_start();
         $_SESSION["nombres"]   = $nombres;
         $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicioventa.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}else if ($tipouser === "Renta") {
    if ($row["correo"] === $correo && $row["contrasena"] === $password) {
        session_start();
         $_SESSION["nombres"]   = $nombres;
         $_SESSION["apellidos"] = $apellidos;
        $_SESSION["id_usuario"] = $id_usuario;
        $_SESSION["correo"] = $correo;
        $_SESSION["tipouser"] = $tipouser;

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/iniciorenta.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
}  




/*elseif ($Tipo == '2') {
    if ($row["Contrasena"] === $password && $row["Usuario"] === $username) {
        session_start();
        $_SESSION["nombre"]   = $nombre;
        $_SESSION["apellido"] = $apellido;
        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/inicioadmin.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }
} elseif ($Tipo == '3') {
    if ($row["Contrasena"] === $password && $row["Usuario"] === $username) {
        session_start();
        $_SESSION["nombre"]   = $nombre;
        $_SESSION["apellido"] = $apellido;
        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";

        header("location: ../Vista/Bienvenidacont.php");

    } else {
        echo "
                <script type='text/javascript'>
                alert('Usuario o contraseña incorrecto');
                </script>";

        header("location: ../Vista/login.php?error=1");
        exit();
    }

}*/

?>
