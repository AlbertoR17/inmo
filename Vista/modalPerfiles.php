<!-- Estructura del modal perfiles -->
    <div class="modal inmodal" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-user-circle modal-icon"></i>
                    <h4 class="modal-title">Editar Usuario</h4>
                </div>
                <div class="modal-body" >
                  <form  method="POST" action="../Modelo/EditarUsuario.php" id="formLimpiar" class="form-group">
                    <div class="form-group">
                        <label></label><input type="hidden" id="idusuario" name="id_usuario" class="form-control">
                    </div>
                       
                    <div class="form-group col-md-4">
                        <label>Nombre(s)</label><input type="text" id="nombre" name="nombres" placeholder="Nombre(s)" class="form-control
                        " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                    </div>
                     <div class="form-group col-md-4">
                        <label>Apellido(s)</label><input type="text" id="apellido" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                    </div>
                     <div class="form-group col-md-4">
                        <label>Telefono</label><input type="text" id="telefono" name="telefono" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 662-0000000" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Correo</label><input type="email" id="correo" name="correo" placeholder="Correo" class="form-control" pattern="^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Contraseña</label><input type="contrasena" id="contrasena" name="pass" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}" required="">
                    </div>
                    <div class="form-group ">
                        <label>Tipo de Usuario</label> 
                        <select name="tipouser" id="tipouser" name="tipouser"  class="form-control chosen-container chosen-container-single"  onkeyup="habilitar" required="">
                            <option value="Administrador">Administrador</option>
                            <option value="Director">Director</option>
                            <option value="Brigadista">Brigadista</option>
                            <option value="Lider">Lider de Brigada</option>
                            <option value="Mesa">Mesa de Apoyo</option>
                        </select>
                    </div>
                    
                    
                <div class="modal-footer">
                   <button type="button" id="btnLimpiar" value="Cerrar" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>