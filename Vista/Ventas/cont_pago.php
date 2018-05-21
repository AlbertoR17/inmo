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
                    <div class="col-md-4">
                        <h2>Detalles de compra</h2>
                        <strong>Producto:</strong> <?php echo $producto ?> <br/>
                        <strong>Precio:</strong> <span class="text-navy"><?php echo $precio ?></span><br><br>
                        <strong>Tipo de terreno:</strong> <?php echo $zona ?> <br/>
                        <strong>Pais:</strong> <?php echo $pais ?> <br/>
                        <strong>Estado:</strong> <?php echo $estado ?> <br/>
                        <strong>Municipio:</strong> <?php echo $municipio ?> <br/>
                        <strong>Localidad:</strong> <?php echo $localidad ?> <br/>
                        <strong>Dirección:</strong> <?php echo $domicilio ?> <br/>
                        
                    </div>
                    <div class="col-md-8">

                        <form role="form" id="payment-form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Numero de la tarjeta</label>
                                        <div class="input-group">
 
                                            <input type="text" class="form-control" onkeypress="return validanum(event);" name="Number" placeholder="Numero valido de tarjeta" required id="ccnum"/>

                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <div style="color:red;font-weight: bold;" id="type"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Expiración de la tarjeta</label><br>
                                        <label>Mes de expiracion</label>
                                        <select name="mm" class="form-control chosen-container chosen-container-single"  required="" >
                                           <option value="0" disabled selected>Mes</option>
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
                                           <option value="11">11</option>
                                           <option value="12">12</option>
                                           
                                        </select>
                                        <label>Año de expiración</label>
                                        <select name="aa"  class="form-control chosen-container chosen-container-single"  required="" >
                                           <option value="0" disabled selected>Año</option>
                                           <option value="18">18</option>
                                           <option value="19">19</option>
                                           <option value="20">20</option>
                                           <option value="21">21</option>
                                           <option value="22">22</option>
                                           <option value="23">23</option>
                                           <option value="24">24</option>
                                           
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Codigo CVV</label>
                                        <input type="text" class="form-control" maxlength="4" minlength="3" onkeypress="return validanum(event);" name="CVC" placeholder="CVC"  required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Titular de la tarjeta</label>
                                        <input type="text" class="form-control" name="nameCard" onkeypress="return validaletra(event);" placeholder="Nombre completo"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" type="submit">Realizar pago</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

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