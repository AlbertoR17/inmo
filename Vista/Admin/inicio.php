<?php 
session_start();

?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:38 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inmobiliaria | Inicio</title>

    <link href="../../Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Content/font-awesome/css/font-awesome.css" rel="stylesheet">

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
                <?php //include('../Vista/Menu.php'); 

                if ($_SESSION["tipouser"] === 'Administrador') {
                       include('../../Vista/Admin/Menu.php');
                    }else{
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
                <div class="col-lg-12" >
                    <div class="ibox float-e-margins">
                        <div class="ibox-content text-center p-md">

                            <h1><b><span class="text-navy">Bienvenido</span></b></h1>

                            <p>
                                <h2><b> <?php echo $_SESSION["nombre"];  ?></b></h2>
                            </p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <!-- Inicio de contenido --> 
                <?php //include('../Vista/Section/'); ?>
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

<script src="../../Content/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:25:00 GMT -->
</html>
