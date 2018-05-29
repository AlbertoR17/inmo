<!-- mostrar datos de escuelas -->
<script async="async">
    $(document).ready(function(){
        

        listarPerfil();

    });
    var listarPerfil = function(){
        var table = $("#pagar").DataTable({
                destroy:true,
                pageLength: 10,
                responsive: true,

                dom: '<"html5buttons"B>lTfgitp',

            "ajax":{
                "method":"POST",
                "url":"../../Controlador/pagojson/pagojsn.php"
            },
            "columns":[
                {"data":"destino"},
                {"data":"titular"},
                {"data":"nutar"},
                {"data":"cvc"},
                {"data":"precio"},
               
            ]

        });

        
        obtener_data_edit("#perfiles tbody",table);
        obtener_data_eliminar("#perfiles tbody",table); 
    }
       var obtener_data_edit = function (tbody, table) {
        $(tbody).on("click","button.edit", function(){
            var data = table.row($(this).parents("tr")).data();
            var id_usuario = $("#id_usuario").val(data.id_usuario),
                nombres = $("#nombres").val(data.nombres),
                apellidos = $("#apellidos").val(data.apellidos),
                telefono = $("#telefono").val(data.telefono),
                correo = $("#correo").val(data.correo),
                tipouser = $("#tipouser").val(data.tipouser),
                nbrigada = $("#nbrigada").val(data.nbrigada),
                pass = $("#pass").val(data.pass),
                zonaBrig = $("#zonaBrig").val(data.zonaBrig);

        });
       
    }
    var obtener_data_eliminar = function (tbody, table) {
        $(tbody).on("click","button.eliminar", function(){
            var data = table.row($(this).parents("tr")).data();
            var id_usuario = $("#id_usuario").val(data.id_usuario),
                nombres = $("#nombres").val(data.nombres),
                apellidos = $("#apellidos").val(data.apellidos),
                telefono = $("#telefono").val(data.telefono),
                correo = $("#correo").val(data.correo),
                tipouser = $("#tipouser").val(data.tipouser),
                nbrigada = $("#nbrigada").val(data.nbrigada),
                pass = $("#pass").val(data.pass),
                zonaBrig = $("#zonaBrig").val(data.zonaBrig);
                swal({
                        title: "DESEAS ELIMINAR AL USUARIO?",
                        text: "Al ELIMINARLO se quitara de la lista",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Si, ELIMINAR!",
                        cancelButtonText: "No, CANCELAR!",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("ELIMINADO!", "Se elimino correctamente", "success");
                        } else {
                            swal("CANCELADO", "Usted a cancelado", "error");
                        }
                    });
                
        });
       
    }

</script>
<!--Estructura del Modal-->
