<?php 
session_start();
$aidi=$_GET['id'];

$iduser=$_SESSION["idusuario"];
require('../../Controlador/conec.php');
$rs = mysqli_query($con, "SELECT * FROM preventa where idventa='$aidi'");

$row = mysqli_fetch_array($rs);

$producto=$row['codterreno'];
$precio=$row['precio'];
$zona=$row['zona'];
$domicilio=$row['domicilio'];
$pais=$row['pais'];
$estado=$row['edo'];
$municipio=$row['municipio'];
$localidad=$row['localidad'];



mysqli_close($con);




?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:38 GMT -->
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
                <?php include('../../Vista/Admin/cont_pagoadmin.php'); ?>
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

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>
<script>
    $("#ccnum").keyup(function(e){
    var num = $(this).val().toString();
    var charCount = num.length;
    
    /* VALIDACION DE TIPO */
    if(charCount == 1) {   
        if(num == "4"){
            $("#type").html("VISA");
        }
    }
    if(charCount == 2){
        if(num == "34" || num == "37"){
            $("#type").html("AMEX");
        } else if( num == "51" || num == "55" || num == "53"){
            $("#type").html("MASTER CARD");
        } else if( num == "55" ){
            $("#type").html("DISCOVER");
        }
    }
    if(charCount == 3){
        if(num == "644"){
             $("#type").html("DISCOVER")
        }
    }
    if(charCount == 4){
        if(num == "6011"){
            $("#type").html("DISCOVER");
        }
    }
    /* !VALIDACION DE TIPO */
    
    /* ALGORITMO */
    if(charCount == 13 || charCount == 14 || charCount == 15 || charCount == 16){
        var valid = isValid(num, charCount);
        if(valid){
            $("#type").html("valida");
            $("input").attr("name", "checkout.cardNumber").attr("class", "valid-card");
        } else {
            $("#type").html("invalida");
            $("input").attr("name", "checkout.cardNumber").attr("class", "invalid-card");
        }
    }
    /* !ALGORITMO */    
});

function isValid(ccNum, charCount){
    var double = true;
    var numArr = [];
    var sumTotal = 0;
    for(i=0; i<charCount; i++){
        var digit = parseInt(ccNum.charAt(i));
        
        if(double){
            digit = digit * 2;
            digit = toSingle(digit);
            double = false;
        } else {
            double = true;
        }
        numArr.push(digit);
    }
    
    
    for(i=0; i<numArr.length; i++){
        sumTotal += numArr[i];
    }
    var diff = eval(sumTotal % 10);
    console.log(diff);
    console.log(diff == "0");
    return (diff == "0");
}

function toSingle(digit){
    if(digit > 9){
        var tmp = digit.toString();
        var d1 = parseInt(tmp.charAt(0));
        var d2 = parseInt(tmp.charAt(1));
        return (d1 + d2); 
    } else {
        return digit;
    }
}
</script>



</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:25:00 GMT -->
</html>
