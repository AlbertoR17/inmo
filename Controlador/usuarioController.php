<?php 
$db="inmo";
$host="localhost";
$pw="";
$user="root";

$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());
$q = "SELECT * FROM usuario";
$ejecutar_q = mysqli_query($con, $q);
if (!$ejecutar_q) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($ejecutar_q)) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}
mysqli_free_result($ejecutar_q);
mysqli_close($con);

    
  