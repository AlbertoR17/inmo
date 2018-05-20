<div class="wrapper wrapper-content animated ">
    <div class="row">
        <div class="col-lg-60">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                <h3>Clientes asignados</h3>
                </div>
        <div class="ibox-content">

            <div class="table-responsive">
              <input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Buscar cliente">

                    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter><!-- dataTables-example  SON LOS QUE NO DEJAN QUE FUNCIONE EL JSON-->
                    <thead>
                        <tr>        
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            
                            <!-- <th>Acción</th> -->

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $iduser=$_SESSION["idusuario"];
                       require('../../Controlador/conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM cliente where asignadoa ='$iduser'");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>";  
                          echo "<td>" . $row['nombres'] .  "</td>";
                          echo "<td> ". $row['apellidos'] . "</td>";
                          echo "<td> ". $row['correoper'] . "</td>"; 
                          echo "<td> ". $row['telefonoper'] . "</td>"; 
                          echo "<td> <a href='../Ventas/RegInfoClieVentas.php?id=".$row['idcliente']."' class='btn btn-success'>Seleccionar</a> </td>";  
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
                    
                    <!-- <th>Acción</th> -->
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

