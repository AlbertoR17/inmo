<div class="wrapper wrapper-content animated ">
    <div class="row">
        <div class="col-lg-60">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                <h3>Historial del pre-registro</h3>
                </div>
        <div class="ibox-content">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="width: 100%;"><!-- dataTables-example  SON LOS QUE NO DEJAN QUE FUNCIONE EL JSON-->
                    <thead>
                        <tr>        
                            <th>Nombre(s)</th>
                            <th>Apellido(s)</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Asignado a</th>
                            <!-- <th>Acción</th> -->

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $iduser=$_SESSION["idusuario"];
                       require('../../Controlador/conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM cliente");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>";  
                          echo "<td>" . $row['nombres'] .  "</td>";
                          echo "<td> ". $row['apellidos'] . "</td>";
                          echo "<td> ". $row['correoper'] . "</td>"; 
                          echo "<td> ". $row['telefonoper'] . "</td>"; 
                          $asig=$row['asignadoa'];
                           $rss = mysqli_query($con, "SELECT nombre,apellido FROM usuario where idusuario='$asig'");
                           $roww = mysqli_fetch_array($rss);
                          echo "<td> ". $roww['nombre'] ." ". $roww['apellido'] . "</td>";   

                          //echo "<td> <a href='../../Controlador/elminausuario.php?id=".$row['idusuario']."' class='btn btn-success'> Borrar</a> </td>";  
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

