<?php 
include '../Controlador/conec.php';
$q = "SELECT * FROM usuario ORDER BY id_usuario Desc";
$ejecutar_q = mysqli_query($conexion, $q);
if (!$ejecutar_q) {
    die("ERROR");
}else{
    while ($data = mysqli_fetch_assoc($ejecutar_q)) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}
mysqli_free_result($ejecutar_q);
mysqli_close($conexion);

    
  