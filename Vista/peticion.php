<script>
  
$(document).ready(function(){

  $("#formu").submit(function(e){

    e.preventDefault();

    var datoscliente=$(this).serialize();

    $.getJSON("../Controlador/consuclientejson/clientesjson.php",datoscliente, procesadatos);//.error(procesarerror);

    return false;

  });

  function procesadatos(datos_devueltos){

//    var c = JSON.parse(datos_devueltos);


   var informacion ="<p>nombrecompleto"+datos_devueltos.nombrecompleto+" </p>";
informacion +="<p>correo"+datos_devueltos.correo+" </p>";
informacion +="<p>telefono"+datos_devueltos.telefono+" </p>";
informacion +="<p>ciudad"+datos_devueltos.ciudad+" </p>";
informacion +="<p>dimension"+datos_devueltos.dimension+" </p>";
informacion +="<p>domicilio"+datos_devueltos.domicilio+" </p>";
informacion +="<p>tipo"+datos_devueltos.tipo+" </p>";

$("#datos").html(informacion);

  /* "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"
   "<input type='text' id='cliente' name='cliente' >"

   
*/

  }
 

});

</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>constructora</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form role="form" method="get" action="../Controlador/consuclientejson/clientesjson.php" id="formu">
<h3>cliente</h3> <br>
<label for="">Nombre</label>
<input type='text' id='cliente' name='cliente' >
<input type="submit" id="enviar" value="enviar">
	</form>
  <div id="datos" name="datos"></div>
</body>
</html>