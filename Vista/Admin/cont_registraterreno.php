<div class="wrapper wrapper-content animated ">
  <div class="row">
    <div class="col-lg-12">
        <div class="ibox-title">
          <h3>Registra terreno</h3>
        </div>
        <div class="ibox-content">
          <form  method="POST" action="../../Controlador/regterreno.php" class="form-group" enctype="multipart/form-data">
            <div class="form-group col-lg-4">
              <label>Codigo del terreno</label><input required type="text" name="codterreno" placeholder="" class="form-control
              "   required="">
            </div>
            <div class="form-group col-lg-4">
              <label>Tipo</label><select name="tipo" id="tipouser" class="form-control chosen-container chosen-container-single"  required="" >
               <option value="0" disabled selected>Seleccione tipo de terreno</option>
               <option value="Residencial">Residencial</option>
               <option value="Comercial" >Comercial</option>
             </select>
            </div>
            <div class="form-group col-lg-4">
              <label>Zona</label>
              <select name="zona" class="form-control chosen-container chosen-container-single"  required="" >
               <option value="0" disabled selected>Seleccione tipo de terreno</option>
               <option value="Norte">Norte</option>
               <option value="Sur">Sur</option>
               <option value="Este">Este</option>
               <option value="Oeste">Oeste</option>
             </select>
            </div>
            <div class="form-group col-lg-4">
              <label>Domicilio</label><input required type="text" name="domicilio" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-lg-4">
              <label>Codigo Postal</label> 
              <input required type="number" maxlength="6" name="codpostal" placeholder="" class="form-control" >
           </div>
            <div class="form-group col-lg-4">
              <label>Ciudad</label><input required type="text" name="ciudad" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-lg-4">
              <label>Dimensión</label><input required type="text" name="dimension" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-lg-4">
              <label>Precio</label><input required type="text" name="precio" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-lg-4">
              <label>Descripción</label><input required type="text" name="descrip" placeholder="" class="form-control" >
            </div>
            <div class="form-group col-lg-4">
              <input required type="hidden"  name="status" placeholder="" class="form-control" value="0"  >
            </div>
            <div class="form-group col-lg-4 fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-success btn-file"><span class="fileinput-new">Seleccionar imagen</span>
                <span class="fileinput-exists">Cambiar</span><input required type="file" name="imagen"/></span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
            </div>
            <div class="form-group ">
             <center> <button type="submit" class="form-group btn btn-success " style="">Guardar</button></center> 
            </div> 

         </form>
       </div>
   
   </div>
 </div>
</div>
