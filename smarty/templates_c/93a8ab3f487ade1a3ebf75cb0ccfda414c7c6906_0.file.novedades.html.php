<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-08 16:09:08
  from '/var/www/html/gespol/smarty/templates/sc/novedades.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5be45fa4547781_02770339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a8ab3f487ade1a3ebf75cb0ccfda414c7c6906' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/sc/novedades.html',
      1 => 1541693344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be45fa4547781_02770339 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Project
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active">Project</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="callout bg-pale-info">
            <h4>Nots!</h4>
            <p>All the data is loaded from a seperate JS file</p>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="box box-outline-info">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="tabla-novedades" class="table table-bordered table-striped display nowrap margin-top-10">
                                <thead>
                                    <tr class="bg-gray">
                                        <th></th>
                                        <th>Novedades</th>
                                        <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Tiempo</th>
                                        <th>Requiriente</th>
                                        <th>Estado</th>
                                        <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Hora Inicio</th>
                                        <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Hora Resolucion</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo '<script'; ?>
>
    $(function() {
        "use strict";

        $(document).ready(function() {

            var table = $('#tabla-novedades').DataTable({
                'language': {

                    'sProcessing': 'Procesando',
                    'sLengthMenu': 'Mostrar _MENU_ registros',
                    'zeroRecords': 'No se encontraron registros',
                    'sEmptyTable': 'Ningún dato disponible en esta tabla',
                    'sInfo': 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_',
                    'sInfoEmpty': 'Mostrando registros del 0 al 0 de un total de 0',
                    'sInfoFiltered': '(filtrado un total de _MAX_ registros)',
                    'sInfoPostFix': '',
                    'sSearch': 'Buscar:',
                    'sUrl': '',
                    'sInfoThousands': ',',
                    'sLoadingRecords': 'Cargando...',
                    'oPaginate': {
                        'sFirst': 'Primero',
                        'sLast': 'Último',
                        'sNext': 'Siguiente',
                        'sPrevious': 'Anterior'
                    },
                    'oAria': {
                        'sSortAscending': ': Activar para odernar la columna de manera ascendente',
                        'sSortDescending': 'Activar para ordenar la columna de manera descendente'
                    }
                },
                "data": testdata.data,
                "searching": true,
                "paging": true,
                "info": true,
                select: "single",
                "columns": [{
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": '',
                        "render": function() {
                            return '';
                        },
                        width: "15px"
                    }, {
                        "data": "novedad"
                    }, {
                        "data": "tiempo"
                    }, {
                        "data": "requiriente"
                    }, {
                        "data": "estado"
                    }, {
                        "data": "hinicio"
                    }, {
                        "data": "hfin"
                    },

                ],
                "order": [
                    [1, 'asc']
                ]
            });

            // Add event listener for opening and closing details
            $('#tabla-novedades tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var tdi = tr.find("i.fa");
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                    tdi.first().removeClass('fa-minus-square');
                    tdi.first().addClass('fa-plus-square');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                    tdi.first().removeClass('fa-plus-square');
                    tdi.first().addClass('fa-minus-square');
                }
            });

            table.on("user-select", function(e, dt, type, cell, originalEvent) {
                if ($(cell.node()).hasClass("details-control")) {
                    e.preventDefault();
                }
            });
        });

        function format(d) {

            // `d` is the original data object for the row
            return '<table cellpadding="6" cellspacing="0" border="0" style="padding-left:50px; width:100%;">' +
                '<tr>' +
                '<td style="width:100px">Requiriente:</td>' +
                '<td>' + d.requiriente + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Telefono:</td>' +
                '<td>' + d.telefono + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Lugar del Incidente:</td>' +
                '<td>' + d.direccion + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Acciones:</td>' +
                '<td>' + d.acciones + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Resolucion:</td>' +
                '<td>' + d.resolucion + '</td>' +
                '</tr>' +
                '</table>';
        }

        var testdata = {
            "data": [{
                "novedad": "Informan de Pelea en Calle Mayor",
                "tiempo": "<td><div class='progress progress-sm'><div class='progress-bar progress-bar-warning progress-bar-striped' role='progressbar' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100' style='width: 60%'></div></div></td>",
                "requiriente": "<a href='#' data-toggle='modal' data-target='#modal-right'>Maria Magdalena Sánchez</a> ",
                "estado": "<span class='badge badge-success'>Active</span>",
                "hinicio": "08-11-2018 09:34:26",
                "hfin": " ",
                "telefono": "<strong>977512365</strong>",
                "direccion": "Calle Mayor 25",
                "acciones": "Se manda indicativo C1 para comprobar el suceso ",
                "resolucion": "Sin datos todavía"
            }]
        };


    }); // End of use strict
<?php echo '</script'; ?>
>

<!-- Modal -->
<div class="modal modal-right fade" id="modal-right" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos Requiriente</h5>
                <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Novedad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23-05-2017</td>
                                <td>Alerta Vecina pelea en Calle Mayor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-bold btn-pure btn-primary float-right">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!--
    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Novedad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23-05-2017</td>
                                <td>Alerta Vecina pelea en Calle Mayor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
--><?php }
}
