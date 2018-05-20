<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tabla de clientes</h5>

                            
                        </div>
                        <div class="ibox-content">
                            
                            <table class="footable table table-stripped toggle-arrow-tiny">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de nacimiento</th>
                                    <th data-hide="all">Domicilio</th>
                                    <th >Telefono</th>
                                    <th >Correo</th>
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

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                      <?php
                 require('../../Controlador/conec.php');
                 $rs = mysqli_query($con, "SELECT * FROM cliente");
                 while($row=mysqli_fetch_array($rs))
                 {
                    
                   echo "<tr class='gradeX'>";
                   echo "<td>".$row['nombres']."</td>";
                   echo "<td>".$row['apellidos']."</td>";
                   echo "<td>".$row['fenac']."</td>";
                   echo "<td>".$row['domicilioper']."</td>";
                   echo "<td>".$row['telefonoper']."</td>";
                   echo "<td>".$row['correoper']."</td>";
                   echo "<td>".$row['razon']."</td>";
                   echo "<td>".$row['rfc']."</td>";
                   echo "<td>".$row['calle']."</td>";
                   echo "<td>".$row['numero']."</td>";
                   echo "<td>".$row['colonia']."</td>";
                   echo "<td>".$row['localidad']."</td>";
                   echo "<td>".$row['referencia']."</td>";
                   echo "<td>".$row['municipio']."</td>";
                   echo "<td>".$row['pais']."</td>";
                   echo "<td>".$row['estado']."</td>";
                   echo "<td>".$row['codpos']."</td>";
                   echo "<td> <a href='' class='btn btn-success'>Seleccionar</a> </td>";

                   /*echo "<td> <a href='../Controlador/hisPdf.php' target='_blank' class='btn btn-danger'>Imprimir</a></td>";
                                echo "<td class='center'> <a href='../Controlador/eliVehiculo.php?id=".$row['num_vehiculo']."' class='btn btn-danger'>Eliminar</a>
                                </td>";*/
                   echo "</tr>";
                 }
                 mysqli_close($con);
                ?> 
                               
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>