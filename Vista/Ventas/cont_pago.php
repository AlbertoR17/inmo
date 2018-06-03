
<script>
  
$(document).ready(function(){

  $("#payform").submit(function(){
    var titu=$("#titular").val();
    var datospago={destino:$("#destino").val(),
                   precio:$("#precio").val(),
                   nutar:$("#nutar").val(),
                   cvc:$("#cvc").val(),
                   titular:$("#titular").val()}
    $.post("https://horarios.itsonora.net/paquetes/transferencia",function(respuesta){
      alert(respuesta);
    });//.error(procesarerror);

    $.post("https://horarios.itsonora.net/paquetes/transferencia",datospago, procesadatos);//.error(procesarerror);

    return false;

  });

  function procesadatos(datos_devueltos){

    if (datos_devueltos) {

      $("#contenido_externo").html("<br><div><p class='font-bold  alert alert-success m-b-sm'>Transacción exitosa</p> <br> <a href='casifinalizar.php' class='btn btn-success'>Finalizar</a><div>");
    
       document.getElementById("payform").style.display = "none";
       document.getElementById("detallecompra").style.display = "none";
      //$.post("casifinalizar.php",datospago,procesadatos);
                     

    }
    else{
      $("#contenido_externo").html("<br><div><p class='font-bold  alert alert-danger m-b-sm'>Transacción fallida</p>");
    }

  }
  function procesarerror(){
    var msgerror="Oops a ocurrido un error, intentalo más tarde";
    $("#contenido_externo").html("<br><div><p class='font-bold  alert alert-success m-b-sm'>"+msgerror+"</p> <br><div>");
  }
  function guardar(){
    $.post("rebd.php",datospago);
  }

});

</script>
<?php 
                        date_default_timezone_set('America/Hermosillo'); 
                        $_SESSION['fechin']=date('Y-m-d'); //fecha, fecha de cobro
                        $_SESSION['horin']=date('h:i:s A',time()); //hora/ 
                        $_SESSION['nutars']="<script> $('#nutar').val(); </script>";
                        $_SESSION['destinok']="1234567890123456";
                        $_SESSION['preciot']=$precio;
                        $_SESSION['nombrex']="<script>document.write(titu)</script>";
                        $_SESSION['aidiventa']=$idventa;
                         ?>


<div class="panel-group payments-method" >  
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <i class="fa fa-cc-amex text-success"></i>
                <i class="fa fa-cc-mastercard text-warning"></i>
                <i class="fa fa-cc-discover text-danger"></i>
            </div>
            <h5 class="panel-title">
                <a data-toggle="collapse">Tarjeta de credito o debito</a>
            </h5>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-4" id="detallecompra">
                        <h2>Detalles de compra</h2>
                        <strong>Producto:</strong> <?php echo $producto ?> <br/>
                        <strong>Precio:</strong> <span class="text-navy"><?php echo $precio ?></span><br>
                        <strong>Tipo de terreno:</strong> <?php echo $zona ?> <br/>
                        <strong>Pais:</strong> <?php echo $pais ?> <br/>
                        
                        <strong>Municipio:</strong> <?php echo $municipio ?> <br/>
                        <strong>Localidad:</strong> <?php echo $localidad ?> <br/>
                        <strong>Dirección:</strong> <?php echo $domicilio ?> <br/>

                        
                    </div>
                    <div class="col-md-8">
                        <form role="form" id="payform" method="POST" action="../../Controlador/pagojson/pagojsn.php">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Numero de la tarjeta</label>
                                        <div class="input-group">
                                          <input type="text" id="destino" name="destino" hidden value="1234567890123456">
                                            <input type="text" id="idventa" name="idventa" hidden value="<?php echo $idventa ?>">
                                            <input type="text" id="precio" name="precio" hidden value="<?php echo $precio ?>">
                                            <input type="text" id="nutar" name="nutar" class="form-control" value="4518642262019785" onkeypress="return validanum(event);" name="Number" placeholder="Numero valido de tarjeta" required id="ccnum"/>

                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <div style="color:red;font-weight: bold;" id="type"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                     <div class="form-group">
                                     <!--   <label>Expiración de la tarjeta</label><br>
                                        <label>Mes de expiracion</label>
                                        <select name="mm" class="form-control chosen-container chosen-container-single"  required="" >
                                           <option value="0" disabled >Mes</option>
                                           <option value="01">01</option>
                                           <option value="02">02</option>
                                           <option value="03">03</option>
                                           <option value="04">04</option>
                                           <option value="05">05</option>
                                           <option value="06">06</option>
                                           <option value="07">07</option>
                                           <option value="08">08</option>
                                           <option value="09">09</option>
                                           <option value="10">10</option>
                                           <option value="11" selected>11</option>
                                           <option value="12">12</option>
                                           
                                        </select>
                                        <label>Año de expiración</label>
                                        <select name="aa"  class="form-control chosen-container chosen-container-single"  required="" >
                                           <option value="0" disabled >Año</option>
                                          <!-  <option value="18" >18</option> 
                                           <option value="19" selected>19</option>
                                           <option value="20">20</option>
                                           <option value="21">21</option>
                                           <option value="22">22</option>
                                           <option value="23">23</option>
                                           <option value="24">24</option>
                                           
                                        </select>-->
                                        
                                    </div> 
                                    <div class="form-group">
                                        <label>Codigo CVV</label>
                                        <input type="text" id="cvc" class="form-control" maxlength="4"  minlength="3" onkeypress="return validanum(event);" name="cvc" placeholder="CVC" value="950"  required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Titular de la tarjeta</label>
                                        <input value="Alberto Rodriguez" id="titular" type="text" class="form-control" name="titular" onkeypress="return validaletra(event);" placeholder="Nombre completo"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-success " type="submit" id="pagar">Realizar pago</button>
                                </div>
                                <!-- data-toggle='modal' data-target='#myModal' -->
                            </div>
                        </form>
                        <div id="contenido_externo"></div>
                    </div>

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
                          <h3>
                            <span class="load"></span>
                          </h3>
                          <button data-dismiss="modal"  class='btn btn-success'>OK !! </button>
                        </center>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
                        <button type="submit" class="btn btn-success btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Pagar</button>
                      </div>
                    </div>
                  </div>
                </div> 
                <div id="resultado"></div>


<!-- <script>
  $(document).ready(function(){
    $("#pagar").click(function(){
      $-post("prueba.php",function(datos){
        $("#resultado").html(datos);
      });
    });
  });

</script>
             -->    

<script type="text/javascript">
    function validaletra(e) { 
      tecla = (document.all) ? e.keyCode : e.which; 
      if (tecla==8) return true; 
      patron =/[A-Za-z\s]/; 
      te = String.fromCharCode(tecla); 
      return patron.test(te); 
    }
  </script>
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

            </div>
        </div>
    </div>
</div>