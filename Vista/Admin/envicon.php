<?php 
session_start();
$id=$_GET['id'];
//echo $id;
require('../../Controlador/conec.php');
$qsa="UPDATE preventa SET statusenvio=1 WHERE idcliente='$id'"; 

$ejecuta_qsa= mysqli_query($con,$qsa) or die("error al realizar update");



$rss = mysqli_query($con, "SELECT * FROM preventa where idcliente='$id'");

$row = mysqli_fetch_array($rss);
    $tipin="Hotel";              
    $idclien=$row['idcliente'];
	$nombrecom=$row['nombrecom'];
	$correoper=$row['correoper'];
	$telefonoper=$row['telefonoper']; 
	$ciudad=$row['ciudad']; 
	$domicilio=$row['domicilio']; 
	$dimensiones=$row['dimension']; 

$arr = array('tipin' => $tipin,
             'idclien' => $idclien,
             'nombrecom' => $nombrecom,
             'correoper' => $correoper,
             'telefonoper' => $telefonoper,
             'ciudad' => $ciudad,
             'domicilio' => $domicilio,
             'dimensiones' => $dimensiones,
);
//echo json_encode($arr);
mysqli_close($con);

//////////////////////////////////////////////////////////////////////////////
//\\FALTA HACER EL ENVIO POR POST Y VARIFICAR SI SE RECIBE LA INFORMACIÓN\\//
////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inmobiliaria | Ventas</title>

    <link href="../../Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Content/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="../../css/plugins/slick/slick.css" rel="stylesheet">
    <link href="../../css/plugins/slick/slick-theme.css" rel="stylesheet">
    
    <link href="../../Content/css/animate.css" rel="stylesheet">
    <link href="../../Content/css/style.css" rel="stylesheet">

<!-- <script>
  
$(document).ready(function(){

  $("#frmenvio").submit(function(){

    var datosenvio={nombre:$("#nombre").val(),
                   correo:$("#correo").val(),
                   telefono:$("#telefono").val(),
                   tipo:$("#tipo").val(),
                   ciudad:$("#ciudad").val(),
                   direccion:$("#direccion").val(),
               	   dimension:$("#dimension").val()}
    //$.post("../../Controlador/consuclientejson/clientesjson.php",function(respuesta){
    //  alert(respuesta);//.error(procesarerror);
    $.post("http://192.168.0.251:81/constructora/modules/cliente1.php",datosenvio);

//http://192.168.0.251:81/constructora/modulos/cotizacion.php
    //$.post("../../Controlador/consuclientejson/clientesjson.php",datospago);//.error(procesarerror);
  
    return false;

  });

  function procesadatos(datos_devueltos){

    if (datos_devueltos) {

      $("#contenido_externo2").html("<br><div><p class='font-bold  alert alert-success m-b-sm'>Envio correcto</p> <br><div>");
    
      document.getElementById("frmenvio").style.display = "none";
      


    }
    else{
      $("#contenido_externo2").html("<br><div><p class='font-bold  alert alert-danger m-b-sm'>Envio fallido</p>");
    }

  }
  function procesarerror(){
    var msgerror="Oops a ocurrido un error, intentalo más tarde";
    $("#contenido_externo2").html("<br><div><p class='font-bold  alert alert-success m-b-sm'>"+msgerror+"</p> <br><div>");
  }

});

</script>
 -->
</head>

<body >

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation" >
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../../Content/img/profile_small.jpg" />
                        </span>
                        <span class="clear" style="color: white;"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION["nombre"]; ?>&nbsp;</strong>
                        </span> <span class="text-muted text-xs block" style="color: white;"><?php echo $_SESSION["tipouser"]; ?> </span> 

                    </div>
                    <div class="logo-element">
                        Menú
                    </div>
                </li>
                <?php //include('../../Vista/Menu.php'); 

                if ($_SESSION["tipouser"] === 'Administrador') {
                  include('../../Vista/Admin/Menu.php');
              }else{
                session_destroy();
                echo "<script>alert('Inicie sesion');</script>";
                header("location: ../../Vista/login.php");
            }
            ?>

        </ul>

    </div>
</nav>

<div id="page-wrapper" class="gray-bg" style="background-image: url('../../Content/img/bg.jpg');">
    <div class="row border-bottom" >
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header" >
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" >
                    <div class="form-group" ><br>
                        <span><h5><b>Inmobiliaria</b> Espacio a tu medida</h5></span>
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <script type="text/javascript">
                    function getTimeAJAX() {   
                        var time = $.ajax({
                                url: '../../Controlador/horaser.php', //indicamos la ruta donde se genera la hora
                                dataType: 'text',//indicamos que es de tipo texto plano
                                async: false     //ponemos el parámetro asyn a falso
                            }).responseText;
                            //actualizamos el div que nos mostrará la hora actual
                            var horis= time;
                            document.getElementById("myWadtch").innerHTML = time;
                        }
                        //con esta funcion llamamos a la función getTimeAJAX cada segundo para actualizar el div que mostrará la hora
                        setInterval(getTimeAJAX,1000);
                    </script>
                    <b><span id='myWadtch'></span></b>


                    <li>
                        <a href="../../Controlador/Salir.php">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>

            </nav>
        </div>



        <div class="wrapper wrapper-content animated fadeInRight"  >

            <div class="row" >
                <!-- Inicio de contenido --> 
<div class="panel-group payments-method" >  
    <div class="panel panel-default">
        <div class="panel-heading">
      
            <h5 class="panel-title">
                <a data-toggle="collapse">Envio de clientes</a>
            </h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body">
<form  method="POST" action="http://192.168.43.195:81/constructora/modules/cliente1.php" id="frmenvio" class="form-group">
                                 <div class="form-group col-md-6">
                                    <input hidden readonly required type="text" name="id" id="id"  required="" value="<?php echo $idclien; ?>">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Nombre del cliente</label><input readonly required type="text" name="nombre" id="nombre" placeholder="Nombre completo" class="form-control
                                    " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="" value="<?php echo $nombrecom; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Correo</label><input readonly required type="email" name="correo" id="correo" placeholder="Correo" class="form-control" pattern="^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="" value="<?php echo $correoper; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telefono</label><input readonly required type="text" name="telefono" id="telefono" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 662-0000000" required="" value="<?php echo $telefonoper; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tipo de terreno</label><input readonly required type="text" name="tipo" id="tipo" placeholder="Residencial/Comercial" class="form-control
                                    " required="" value="<?php echo 'Hotel'; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Cuidad</label><input readonly required type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="form-control
                                    " required="" value="<?php echo $ciudad; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Dirección</label><input readonly required type="text" name="direccion" id="direccion" placeholder="Domicilio del predio" class="form-control
                                    " required="" value="<?php echo $domicilio; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Dimensiones</label><input readonly required type="text" name="dimension" id="dimension" placeholder="Tamaño del predio" class="form-control
                                    " required="" value="<?php echo $dimensiones; ?>">
                                </div>
                                
                               <div class="modal-footer">
                                
                                 <button type="submit" class="btn btn-danger">Enviar</button>
                             </div>
                         </form>


<div id="contenido_externo2"></div>







</div>
</div>
</div>
</div>
                <!-- Fin de contenido --> 
            </div>
        </div>
        <div class="footer" >
            <div class="pull-right">
             Copyright <b>Inmobiliaria</b> &copy; <?php echo date('Y') ?>
         </div>

     </div>

 </div>
</div>



<!-- Mainly scripts -->
<script src="../../Content/js/jquery-3.1.1.min.js"></script>
<script src="../../Content/js/bootstrap.min.js"></script>
<script src="../../Content/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../../Content/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../../Content/js/inspinia.js"></script>
<script src="../../Content/js/plugins/pace/pace.min.js"></script>

<script src="../../Content/js/plugins/slick/slick.min.js"></script>