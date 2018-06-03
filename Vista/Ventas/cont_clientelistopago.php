<div class="wrapper wrapper-content animated ">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                <h3>Clientes listos para realizar el pago</h3>
                </div>
        <div class="ibox-content">

            <div class="table-responsive">
              <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar cliente">

                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8" data-filter=#filter><!-- dataTables-example  SON LOS QUE NO DEJAN QUE FUNCIONE EL JSON-->
                    <thead>
                        <tr>        
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Domicilio</th>
                            <th>Telefono</th>
                            <th>Correo Electronico</th>
                            <th data-hide="all">Fecha nacimiento</th>
                            <th data-hide="all">Razon Social</th>
                            <th data-hide="all">RFC</th>
                            <th data-hide="all">Calle</th>
                            <th data-hide="all">Numero</th>
                            <th data-hide="all">Colonia</th>
                            <th data-hide="all">Localidad</th>
                            <th data-hide="all">Referencia</th>
                            <th data-hide="all">Municipio</th>
                            <th data-hide="all">Pais</th>
                            <th data-hide="all">Estado</th>
                            <th data-hide="all">Codigo Postal</th>
                            <th data-hide="all">Terreno</th>
                            <th data-hide="all">Zona</th>
                            <th data-hide="all">Ciudad</th>
                            <th data-hide="all">Direccion del terreno</th>
                            <th data-hide="all">Codigo Postal del terreno</th>
                            <th data-hide="all">Dimensión</th>
                            <th data-hide="all">Precio</th>
                            <th data-hide="all">Descripción</th>
                            

                            
                            <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $iduser=$_SESSION["idusuario"];
                       require('../../Controlador/conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM preventa where (autorizado=1) and (pagoconfirmado=0)
                        and (asignadoa='$iduser')");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>";  
                          echo "<td>" . $row['nombres'] .  "</td>";
                          echo "<td> ". $row['apellidos'] . "</td>";
                          echo "<td> ". $row['domicilioper'] . "</td>"; 
                          echo "<td> ". $row['telefonoper'] . "</td>"; 
                          echo "<td> ". $row['correoper'] . "</td>"; 
                          echo "<td> ". $row['fenac'] . "</td>"; 
                          echo "<td> ". $row['razon'] . "</td>";
                          echo "<td> ". $row['rfc'] . "</td>"; 
                          echo "<td> ". $row['calle'] . "</td>";
                          echo "<td> ". $row['numero'] . "</td>";  
                          echo "<td> ". $row['colonia'] . "</td>";  
                          echo "<td> ". $row['localidad'] . "</td>";  
                          echo "<td> ". $row['referencia'] . "</td>";  
                          echo "<td> ". $row['municipio'] . "</td>";  
                          echo "<td> ". $row['pais'] . "</td>";  
                          echo "<td> ". $row['edo'] . "</td>";  
                          echo "<td> ". $row['codpos'] . "</td>";  
                          echo "<td> ". $row['codterreno'] . "</td>";  
                          echo "<td> ". $row['zona'] . "</td>";  
                          echo "<td> ". $row['domicilio'] . "</td>";  
                          echo "<td> ". $row['codpostal'] . "</td>";  
                          echo "<td> ". $row['ciudad'] . "</td>";  
                          echo "<td> ". $row['dimension'] . "</td>";  
                          echo "<td> ". $row['precio'] . "</td>";  
                          echo "<td> ". $row['descripcion'] . "</td>";  
                          echo "<td> <a id='ancla' href='../Ventas/pago.php?id=".$row['idventa']."' class='btn btn-success'>Realizar pago</a> <a href='../../Controlador/eliminapreventa.php?id=".$row['idventa']."' class='btn btn-success'>Cancelar compra</a></td>";  
                          echo "</tr>";  

                      }

                      mysqli_close($con);
                      ?>   
                  </tbody>
                  <!-- <button id='tramites' data-toggle='modal' data-target='#myModal' class='btn btn-success'>Tramites legales</button> -->
                  <tfoot>
                   <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                    <th>Domicilio</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Acción</th> 
                </tr>
            </tfoot> 
        </table>
    </div>
    <div class="modal " id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Tramite con gestoria legal</h4>
        </div>
        <div class="modal-body">
          <center>
            <h5>Simulación de respuesta</h5>
            <button data-dismiss="modal"  class='btn btn-success'>OK !! </button>
          </center>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>

        </div>
      </div>
    </div>
  </div> 
    
                   <!-- <a class='btn btn-success' href='#edit".$row['idusuario']." data-toggle='modal'>Editar </a> -->
        

</div>
</div>
</div>
</div>
</div>

