<?php
                       require('../Controlador/conec.php');
                       $id=$_GET['id'];
                       $rs = mysqli_query($con, "SELECT * FROM usuario where idusuario= '$id'");
                        $row = mysqli_fetch_array($rs);
                        $nombre=$row['nombre'] ;
                        $apellido=$row['apellido'];
                        $correo=$row['correo'] ;
                       $telefono=$row['telefono'];
                       $tipouser=$row['tipouser'];
                       

                      mysqli_close($con);
                      ?>   
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-10">
       
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Horizontal form</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">


                                <div class="form-group"><label class="col-lg-2">Nombre</label>
                                    <div class="col-lg-6">
                                        <input type="text" value="<?php echo $nombre ?>" name="Nombre" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2">Apellidos</label>
                                    <div class="col-lg-6">
                                        <input type="text" value="<?php echo $apellido ?>" name="Apellidos" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2">Correo</label>
                                    <div class="col-lg-6">
                                        <input type="text" value="<?php echo $correo ?>" name="Correo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2">Telefono</label>
                                    <div class="col-lg-6">
                                        <input type="text" value="<?php echo $telefono ?>" name="Telefono" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2">Tipo de usuario</label>
                                    <div class="col-lg-6">
                                        <select name="Tipouser" id="tipouser" id="tipouser" class="form-control chosen-container chosen-container-single"  required="" >
                                       <option value="0" disabled selected>Selecciones tipo de usuario</option>
                                       <option value="Administrador">Administrador</option>
                                       <option value="Recepcion">Recepcion</option>
                                       <option value="Venta" >Agente de venta</option>
                                       <option value="Renta">Agente de renta</option>

                                   </select>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                
        </div>
    </div>
</div>