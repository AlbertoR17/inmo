<div class="wrapper wrapper-content animated ">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-title">
          <h3>Registrar</h3>
        </div>
        <div class="ibox-content">
          <form  method="POST" action="../../Modelo/RegistroClienteadmin.php" class="form-group">
            <div class="form-group">
              <label>Nombre(s)</label><input required type="text" name="nombres" placeholder="Nombre(s)" class="form-control
              " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
            </div>
            <div class="form-group">
              <label>Apellido(s)</label><input required type="text" name="apellidos" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
            </div>
            <div class="form-group">
              <label>Correo</label><input required type="email" name="correo" placeholder="Correo" class="form-control" pattern="^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="">
            </div>
            <div class="form-group">
              <label>Telefono</label><input required type="text" name="telefono" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 662-0000000" required="">
            </div>
            <div class="form-group">
              <label>Asignado a: </label> 
              <select name="asignadoa" id="tipouser" class="form-control chosen-container chosen-container-single"  required="" >
               <option value="0" disabled selected>Selecciona agente de ventas</option>
                            <?php
                            require('../../Controlador/conec.php');

                            $rs = mysqli_query($con, "SELECT idusuario,nombre,apellido FROM usuario where tipouser ='Venta' ");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['idusuario']."'>";
                              echo $row['nombre']. " " .$row['apellido'];
                              echo "</option>";                     
                            }
                            mysqli_close($con);
                            ?>
             </select>
           </div>    
             <center><button type="submit" class="form-group btn btn-success" style="">Guardar</button></center>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
