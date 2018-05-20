<div >
  <div class="panel-body">
    <div class="ibox-title">
     <h3><b><span>Registro</span></b></h3>
   </div>
   <div class="ibox-content">
    <div class="row">
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
  <form method="POST" action="../../Controlador/regclienteventas.php" class="form-horizontal">
    <!-- NIVEL 1 -->
    <div class="col-lg-12">
      <fieldset>
      <legend>Datos del Cliente</legend>
      <!-- LIDER DE BRIGADA -->
      <div class="col-lg-6">
        
          <div class="form-group">
            <input value="<?php echo $idcliente ?>" required name="idc"  type="text" class="form-control">
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Nombre(s)</label>
            <div class="col-sm-10"><input  value="<?php echo $nombres ?>" required placeholder="" name="nombre"   type="text" class="form-control"></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10"><input  value="<?php echo $apellidos ?>" required type="text" name="apellido" class="form-control"></div>
          </div>

          <div class="form-group"><label class="col-sm-2 control-label">Fecha de nacimiento</label>
            <div class="col-sm-10"><input  required type="date" name="fenac" class="form-control"></div>
          </div>
          
      </div>
      <div class="col-lg-6">
          <div class="form-group"><label class="col-sm-2 control-label">Domicilio</label>
            <div class="col-sm-10"><input required type="text" name="domi" placeholder="" class="form-control"></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10"><input  value="<?php echo $telefonoper ?>" onkeypress="return validanum(event)" maxlength="10" required type="text" name="tel" placeholder="" class="form-control"></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Correo electrónico</label>
            <div class="col-sm-10"><input  value="<?php echo $correoper ?>" required type="text" name="coel" placeholder="" class="form-control"></div>
          </div>
      </div>
 </fieldset>
   <div class="col-lg-12">
    <fieldset>
    <legend>Datos fiscales</legend>
    <div class="col-lg-6"> 
        <div class="form-group"><label class="col-sm-2 control-label">Nombre o razón social</label>
          <div class="col-sm-10"><input placeholder="" name="rasocial" type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">RFC</label>
          <div class="col-sm-10"><input placeholder="" name="rfc" type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Calle</label>
          <div class="col-sm-10"><input placeholder="" name="calle" type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Numero</label>
          <div class="col-sm-10"><input type="text" name="numero" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Colonia</label>
          <div class="col-sm-10"><input type="text" name="colonia" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Localidad</label>
          <div class="col-sm-10"><input type="text" name="localidad" placeholder="" class="form-control"></div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="form-group"><label class="col-sm-2 control-label">Referencia</label>
          <div class="col-sm-10"><input type="text" name="referencia" placeholder="" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Municipio</label>
          <div class="col-sm-10"><input type="text" name="municipio" placeholder="" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Pais</label>
          <div class="col-sm-10"><input type="text" name="pais" placeholder="" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label">Estado</label>
          <div class="col-sm-10"><input type="text" name="edo" placeholder="" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2  control-label" onkeypress="return validanum(event)">Codigo postal</label>
          <div class="col-sm-10"><input type="text" name="codpos" placeholder="" class="form-control"></div>
        </div>
      
    </div>
  </fieldset>
  </div>
                  <!-- <div class="col-lg-6">
                    <fieldset>
                      <legend>Archivos Digitales</legend>
                      
                      <div class="form-group"><label class="col-sm-2 control-label">Identificación Oficial</label>
                        <div class="col-sm-10"><input placeholder="INE, Pasaporte" name="prelitro" type="text" class="form-control"></div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Comprobante de domicilio</label>
                        <div class="col-sm-10"><input type="text" name="pregasolina" class="form-control"></div>
                      </div>
                      <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>

                    </fieldset>
                  </div>       
                </div>--> 

              </div><button type="submit" class="btn btn-success pull-right" style="margin-right: 25px;">Guardar</button>
              <br>
            </form>
          </div>
        </div>      
      </div>
    </div>
