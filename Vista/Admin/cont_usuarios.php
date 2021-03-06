<div class="wrapper wrapper-content animated ">
    <div class="row">
        <div class="col-lg-60">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                 <!--Boton Modal-->
                 <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal2"><li class="fa fa-plus-square"></li> Agregar Usuario</button><br><br>
                 <!--Estructura del Modal-->
                 <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeIn">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-user-circle modal-icon"></i>
                                <h4 class="modal-title">Agregar Usuario</h4>
                            </div>
                            <div class="modal-body" >
                              <form  method="POST" action="../../Modelo/RegistroUsuarios.php" id="formLimpiar" class="form-group">

                                <div class="form-group col-md-6">
                                    <label>Nombre(s)</label><input required type="text" name="nombres" placeholder="Nombre(s)" class="form-control
                                    " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Apellido(s)</label><input required type="text" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Correo</label><input required type="email" name="correo" placeholder="Correo" class="form-control" pattern="^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contraseña</label><input required type="password" name="pass" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telefono</label><input required type="text" name="telefono" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 662-0000000" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tipo de Usuario</label> 
                                    <select name="tipouser" id="tipouser" id="tipouser" class="form-control chosen-container chosen-container-single"  required="" >
                                       <option value="0" disabled selected>Selecciones tipo de usuario</option>
                                       <option value="Administrador">Administrador</option>
                                       <option value="Recepcion">Recepcion</option>
                                       <option value="Venta" >Agente de venta</option>
                                       

                                   </select>
                               </div>

                               <div class="modal-footer">
                                 <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                 <button type="submit" class="btn btn-danger">Guardar</button>
                             </div>
                         </form>
                     </div>

                 </div>
             </div>
             <!--Estructura de la tabla -->

             <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="width: 100%;"><!-- dataTables-example  SON LOS QUE NO DEJAN QUE FUNCIONE EL JSON-->
                    <thead>
                        <tr>
                            <th style="display: none;">ID</th>
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Email</th>
                            <th style="display: none;">Contraseña</th>
                            <th>Telefono</th>
                            <th>Tipo de Empleado</th>
                            <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       require('../../Controlador/conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM usuario");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr style='font-weight:bold;'>";  
                          echo "<td>" . $row['nombre'] .  "</td>";
                          echo "<td> ". $row['apellido'] . "</td>";
                          echo "<td> ". $row['correo'] . "</td>"; 
                          echo "<td> ". $row['telefono'] . "</td>"; 
                          echo "<td> ". $row['tipouser'] . "</td>";   
                          echo "<td> 
                          <a href='../../Controlador/elminausuario.php?id=".$row['idusuario']."' class='btn btn-success'> Borrar</a> </td>";  



                          echo "</tr>";   
                      }


                      mysqli_close($con);
                      ?>   
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Tipo de Empleado</th>
                    <th>Acción</th>
                </tr>
            </tfoot> 
        </table>
    </div>
    
                   <!-- <a class='btn btn-success' href='#edit".$row['idusuario']." data-toggle='modal'>Editar </a> -->
        

</div>
</div>
</div>
</div>
</div>
</div>
