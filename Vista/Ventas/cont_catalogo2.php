                    <?php
                    $iduser=$_SESSION["idusuario"];
                    require('../../Controlador/conec.php');
                    $rs = mysqli_query($con, "SELECT * FROM terrenos where status=0");
                    echo "<div class='wrapper wrapper-content animated fadeInRight'>
                    <div class='row'>";
                    while($row = mysqli_fetch_array($rs)){


                     $idterreno=$row['idterreno']; 
                     $codterreno=$row['codterreno'];
                     $zona=$row['zona'];  
                     $domicilio=$row['domicilio']; 
                     $codpostal=$row['codpostal'];
                     $ciudad=$row['ciudad'];
                     $dimension=$row['dimension'];
                     $precio=$row['precio'];
                     $descripcion=$row['descripcion'];


                     ?>
                     <!-- aqui mas terrenos --> 
                     <?php

                     echo "
                     <div class='col-lg-4'>
                     <div class='ibox'>
                     <div class='ibox-content product-box'>
                     <div class='product-imitation'>
                     <img  style='width: 100%; height: 100%;' src='../../Content/img/terrenos/".$codterreno.".jpg' alt='>
                     </div>
                     <div class='product-desc'>
                     
                     <span ><span style='color:black;'>Zona: </span>".$zona."</span>
                     <a href='#' class='product-name'> ".$codterreno."</a>
                     <small class='text-muted'>Zona: ".$descripcion."</small>

                    
                     <div class='col-lg-6'>
                     <dl class=''>
                     <dt style='color:black;'><b>Precio</b></dt>
                     <dd style='color:gray;'>$".$precio." pesos</dd>
                     <dt style='color:black;'><b>Dimenciones</b></dt>
                     <dd style='color:gray;'>".$dimension."</dd>
                     <dt style='color:black;'><b>Domicilio</b></dt>
                     <dd style='color:gray;'>".$domicilio."</dd>
                     </div >
                     <div class='col-lg-6'>
                     <dt style='color:black;'><b>Ciudad</b></dt>
                     <dd style='color:gray;'>".$ciudad."</dd>
                     <dt style='color:black;'><b>Codigo Postal</b></dt>
                     <dd style='color:gray;'>".$codpostal."</dd>
                     <dt style='color:black;'><b>Zona</b></dt>
                     <dd style='color:gray;'>".$zona."</dd>
                     </dl>
                    <br>
                     
                     </div>
                     
                     </div>
                     </div>
                     </div>
                     </div>
                     </div>
                     ";
                 }
                 mysqli_close($con);

                 ?> 
                 <!-- hasta aqui terrenos

                    <a href='../../Controlador/seleccionaterreno.php?idc=".$iduser."&idt=".$idterreno."' class='btn btn-success btn-sm'> Seleccionar </a>  -->
             </div>
         </div>
 <!--
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog"style="width: 70% ;height: 60%;">
        <div class="modal-content animated bounceInRight">
            <div class="modal-body" >
                <div class="row">
                        <div class="ibox product-detail">
                            <div class="ibox-content">

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="product-images" >
                                            <div>
                                                <div class="image-imitation">
                                                    <img  style="width: 100%; height: 100%;" src="../../Content/img/terrenos/XT500A.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="font-bold m-b-xs">
                                            [CodigoTerreno]
                                        </h2>
                                        <hr>
                                        <div class="m-t-md">
                                            <h3><b>Precio:</b></h3>
                                            <h2 class="product-main-price">$406,602</h2>
                                        </div>
                                        <hr>
                                        <div class="col-lg-12">
                                            <h4>Descripción del terreno</h4>
                                            <div class="small text-muted">
                                                [It is a long established fact that a reader wil]
                                            </div>
                                            <dl class="small m-t-md">
                                                <dt>Dimenciones</dt>
                                                <dd>A description list is perfect for defining terms.</dd>
                                                <dt>Domicilio</dt>
                                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                <dt>Ciudad</dt>
                                                <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                                <dt>Codigo Postal</dt>
                                                <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                                <dt>Zona</dt>
                                                <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                                <dt>Ciudad</dt>
                                                <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                            </dl>
                                            <button type="button" class="btn btn-white btn-sm" data-dismiss="modal"> Cerrar </button>
                <button type="button" class="btn btn-success btn-sm"> Seleccionar </button>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>



-->














<!-- aqui mas terrenos 
<div class="row">
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <small class="text-muted">Category</small>
                                <a href="#" class="product-name"> Product</a>



                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


<!-- 



         <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-10">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images" >

                                        <div>
                                            <div class="image-imitation">
                                                <img  style="width: 100%; height: 100%;" src="../../Content/img/terrenos/XT500A.jpg" alt="">
                                            </div>
                                        </div>
                    
                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        [CodigoTerreno]
                                    </h2>
                                    <hr>
                                    <div class="m-t-md">
                                        <h3><b>Precio:</b></h3>
                                        
                                        <h2 class="product-main-price">$406,602</h2>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12">
                                        <h4>Descripción del terreno</h4>
                                    <div class="small text-muted">
                                        [It is a long established fact that a reader wil]
                                    </div>
                                    <dl class="small m-t-md">
                                        <dt>Dimenciones</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <dt>Domicilio</dt>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Ciudad</dt>
                                        <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                        <dt>Codigo Postal</dt>
                                        <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                        <dt>Zona</dt>
                                        <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                        <dt>Ciudad</dt>
                                        <dd>[Etiam porta sem malesuada magna mollis euismod.]</dd>
                                    </dl>
                                    <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Cerrar </button>
                                            <button class="btn btn-success btn-sm"><i class="fa fa-envelope"></i> Seleccionar </button>
                                    </div>
                                    <div>
                                        
                                    </div>



                                </div>
                            </div>

                        </div>
                        
                    </div>

                </div>

            </div>
        </div>
 -->