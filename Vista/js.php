    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script src="../Include/js/jquery-3.1.1.min.js"></script>
    <script src="../Include/js/bootstrap.min.js"></script>
    <script src="../Include/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../Include/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../Include/js/inspinia.js"></script>
    <script src="../Include/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="../Include/js/plugins/flot/jquery.flot.js"></script>
    <script src="../Include/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../Include/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="../Include/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="../Include/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="../Include/js/demo/peity-demo.js"></script>
     <!-- iCheck -->
    <script src="../Include/js/plugins/iCheck/icheck.min.js"></script>

    <script src="../Include/js/plugins/footable/footable.all.min.js"></script>
    <script src="../Include/js/plugins/dataTables/datatables.min.js"></script>
     <!-- Chosen -->
    <script src="../Include/js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="../Include/js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="../Include/js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="../Include/js/plugins/datapicker/bootstrap-datepicker.js"></script>
   <script src="../Include/js/plugins/daterangepicker/daterangepicker.js"></script>
   <!-- NouSlider -->
   <script src="../Include/js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="../Include/js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="../Include/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="../Include/js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="../Include/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="../Include/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="../Include/js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="../Include/js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="../Include/js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="../Include/js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Select2 -->
    <script src="../Include/js/plugins/select2/select2.full.min.js"></script>

    <!-- TouchSpin -->
    <script src="../Include/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Tags Input -->
    <script src="../Include/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- Dual Listbox -->
    <script src="../Include/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>

    

    <script>
        $(document).ready(function() {
             $('#tipouser').on('change',function(){
              var selectValor = '#' +$(this).val();
              $('#ver').children('div').hide();
              $('#ver').children(selectValor).show();
            });
             $('#tipouser').on('change',function(){
              var selectValor = '#' +$(this).val();
              $('#mostrar').children('div').hide();
              $('#mostrar').children(selectValor).show();
            });

           $("#btnLimpiar").click(function(event) {
           $("#formLimpiar")[0].reset();
            });
            $('.footable').footable();
            $('.footable2').footable();



        });

    </script>
        <!-- Sweet alert -->
    <script src="../Include/js/plugins/sweetalert/sweetalert.min.js"></script>

<script>

    $(document).ready(function () {

        $('.demo1').click(function(){
            swal({
                title: "YA PUEDE AGENDAR LA ESCUELA",
                text: "Bien Hecho",
                type: "success"

            });
        });

        $('.demo2').click(function(){
            swal({
                title: "Listo!",
                text: "Presiona OK!",
                type: "success"
            });
        });

        $('.demo3').click(function () {
            swal({
                title: "Deseas CANCELAR esta opcion?",
                text: "Al CANCELAR se quitara de tu lista!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si, Cancelar!",
                closeOnConfirm: false
            }, function () {
                swal("Cancelado!", "Esta opcion se quito de tu lista correctamente!", "success");
            });
        });

        $('.demo4').click(function () {
            swal({
                        title: "Deseas ELIMINAR?",
                        text: "Al ELIMINAR esta opcion se quitara de tu lista",
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
                            swal("Cancelado", "Usted a cancelado", "error");
                        }
                    });
        });


    });

</script>
   
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    /* { extend: 'copy'},
                    {extend: 'csv'},*/
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},
/*
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }*/
                ]

            });

        });
    </script>
   
    </script>
    <script>
        $(document).ready(function(){

            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });
            
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            var elem_4 = document.querySelector('.js-switch_4');
            var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
                switchery_4.disable();

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });


        });

        $('.chosen-select').chosen({width: "100%"});

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        var basic_slider = document.getElementById('basic_slider');

        noUiSlider.create(basic_slider, {
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        var range_slider = document.getElementById('range_slider');

        noUiSlider.create(range_slider, {
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        var drag_fixed = document.getElementById('drag-fixed');

        noUiSlider.create(drag_fixed, {
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>
<!-- mostrar datos de usuarios -->
<script>
    $(document).ready(function(){

        listar();

    });
    var listar = function(){
        var table = $("#dt_usuarios").DataTable({
            pageLength: 10,
                responsive: true,

                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},
                 
                ],
                "destroy":true,

            "ajax":{
                "method":"POST",
                "url":"../Controlador/usuarioController.php"
            },
            "columns":[
                {"data":"id_usuario","visible": false},
                {"data":"nombres"},
                {"data":"apellidos"},
                {"data":"telefono"},
                {"data":"correo"},
                {"data":"tipouser"},
                {"data":"nbrigada"},
                {"data":"zonaBrig"}
                /*{"defaultContent":"<button>Editar</button>"}*/
            ]

        });

    }
    
</script>

<!-- mostrar datos de escuelas -->
<script async="async">
    $(document).ready(function(){
        

        listarEsc();

    });
    var listarEsc = function(){
        var table = $("#escuela").DataTable({
                destroy:true,
                pageLength: 10,
                responsive: true,
                expandFirst: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
                    {extend: 'excel', title: 'LISTA DE ESCUELAS'},
                    {extend: 'pdf', title: 'LISTA DE ESCUELAS'},
                 
                ],

            "ajax":{
                "method":"POST",
                "url":"../Controlador/escuelaController.php"
            },
            "columns":[
                
                {"data":"Clave"},
                {"data":"Escuela"},
                {"data":"Domicilio"},
                {"data":"Localidad22"},
                {"data":"Municipio"},
                {"data":"Ruta33"},
                {"defaultContent": "<button class=' info btn btn-w-m btn-danger' data-toggle='modal' data-target='#myModal2'> Informacion</button>"},
                {"data":"Eq","visible": false},
                {"data":"Equip","visible": false},
                {"data":"Reequip","visible": false},
                {"data":"Conectividad","visible": false},
                {"data":"Reporte","visible": false},
                {"data":"NumRep","visible": false},
                {"data":"Visita","visible": false},
                {"data":"UltVisita","visible": false},
                {"data":"FechaMant","visible": false},
                {"data":"tipo_escuela","visible": false},
                {"data":"concepto","visible": false},
                {"data":"fecha","visible": false},
                {"data":"levanto","visible": false},
                {"data":"clavecct","visible": false},
                {"data":"Status_Esc","visible": false}
                

               // {"defaultContent":"<button>Editar</button>"}
            ]

        });
        obtener_data_info("#escuela tbody",table); 
    }
       var obtener_data_info = function (tbody, table) {
        $(tbody).on("click","button.info", function(){
            var data = table.row($(this).parents("tr")).data();
            var 
                Clave = $("#Clave").val(data.Clave),
                Escuela = $("#Escuela").val(data.Escuela),
                Domicilio = $("#Domicilio").val(data.Domicilio),
                Localidad22 = $("#Localidad22").val(data.Localidad22),
                Municipio = $("#Municipio").val(data.Municipio),
                Ruta33 = $("#Ruta33").val(data.Ruta33),
                Eq = $("#Eq").val(data.Eq),
                Equip = $("#Equip").val(data.Equip),
                Reequip= $("#Reequip").val(data.Reequip),
                Conectividad = $("#Conectividad").val(data.Conectividad),
                Reporte = $("#Reporte").val(data.Reporte),
                NumRep = $("#NumRep").val(data.NumRep),
                Visita = $("#Visita").val(data.Visita),
                UltVisita = $("#UltVisita").val(data.UltVisita),
                FechaMant = $("#FechaMant").val(data.FechaMant),
                tipo_escuela = $("#tipo_escuela").val(data.tipo_escuela),
                concepto = $("#concepto").val(data.concepto),
                fecha = $("#fecha").val(data.fecha),
                levanto = $("#levanto").val(data.levanto),
                clavecct = $("#clavecct").val(data.clavecct),
                Status_Esc = $("#Status_Esc").val(data.Status_Esc);

        });
       
    }

</script>
<!--Estructura del ModalEscuelas-->
<?php include 'modalEscuelas.php'; ?>

