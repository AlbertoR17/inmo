<div class="wrapper wrapper-content animated ">
    <div class="row">
        <div class="col-lg-60">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                <h3>Ventas realizadas</h3>
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
                            
                           <th>Acción</th> 

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $iduser=$_SESSION["idusuario"];
                       require('../../Controlador/conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM preventa where pagoconfirmado=1");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>";  
                          echo "<td hidden>" . $row['idventa'] .  "</td>";
                          echo "<td>" . $row['nombres'] .  "</td>";
                          echo "<td> ". $row['apellidos'] . "</td>";
                          echo "<td> ". $row['correoper'] . "</td>"; 
                          echo "<td> ". $row['telefonoper'] . "</td>"; 
                          echo "<td> 
                                  <a href='../Admin/envicon.php?id=".$row['idcliente']."' class='btn btn-success'>Enviar</a> 
                                  <form action='../../Controlador/compago.php' method='POST' >
                                    <input type='hidden'   name='idc'  value='".$row['idventa']."' >
                                    <button type='submit' class='btn btn-success'>Comprobante de pago </button>
                                  </form> 
                                </td>";  
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

