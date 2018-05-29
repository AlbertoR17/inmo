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
              <label>Nombre(s)</label><input required type="text" name="nombres" onkeypress="return validaletra(event)" placeholder="Nombre(s)" class="form-control
              " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
            </div>
            <div class="form-group">
              <label>Apellido(s)</label><input required type="text" name="apellidos" onkeypress="return validaletra(event)" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
            </div>
            <div class="form-group">
              <label>Correo</label><input required type="email" onkeypress="return validacorreo(event)" name="correo" placeholder="Correo" class="form-control" pattern="^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required="">
            </div>
            <div class="form-group">
              <label>Telefono</label><input required type="number" onkeypress="return validanum(event)" name="telefono"  placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 662-0000000" required="">
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
 <script type="text/javascript">


       function validanum(e){
        tecla = (document.all) ? e.keyCode : e.which;

        if (tecla==8){
          return true;
        }

        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
      }
    </script>
    <script type="text/javascript">
     function validacorreo(e) { 
      tecla = (document.all) ? e.keyCode : e.which; 
      if (tecla==8) return true; 
      patron =/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
      te = String.fromCharCode(tecla); 
      return patron.test(te); 
    }
    function isValidEmail(mail) {  
      return /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
    }

  </script>
  <script type="text/javascript">
    function validaletra(e) { 
      tecla = (document.all) ? e.keyCode : e.which; 
      if (tecla==8) return true; 
      patron =/[A-Za-z\s]/; 
      te = String.fromCharCode(tecla); 
      return patron.test(te); 
    }
  </script>