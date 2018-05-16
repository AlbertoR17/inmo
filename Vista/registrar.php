<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:24:38 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inmobiliaria | Inicio</title>

    <link href="../Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Content/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../Content/css/animate.css" rel="stylesheet">
    <link href="../Content/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../Content/img/profile_small.jpg" />
                        </span>

                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">[NombreUsuario]</strong>
                        </span> <span class="text-muted text-xs block">[TipoUsuario]<b class="caret"></b></span> </span> 

                    </div>
                    <div class="logo-element">
                        Menú
                    </div>
                </li>
                <?php include('../Vista/Section/Menu.php'); ?>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">



                    <li>
                        <a href="../Controlador/Salir.php">
                            <i class="fa fa-sign-out"></i> Salir
                        </a>
                    </li>
                </ul>

            </nav>
        </div>



        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <!-- Inicio de contenido --> 
                <?php include('../Vista/Section/cont_registrar.php'); ?>
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
<script src="../Content/js/jquery-3.1.1.min.js"></script>
<script src="../Content/js/bootstrap.min.js"></script>
<script src="../Content/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../Content/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../Content/js/inspinia.js"></script>
<script src="../Content/js/plugins/pace/pace.min.js"></script>

<script src="../Content/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:25:00 GMT -->
</html>
