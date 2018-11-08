<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-08 00:43:40
  from '/var/www/html/gespol/smarty/templates/usuarios.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5be386bccffee2_59559637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ad95a03cf70ca16eb2789ced1ab58e2fe3935a' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/usuarios.html',
      1 => 1541637811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be386bccffee2_59559637 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gestion de Usuarios
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Comisaria</a></li>
            <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
            <li class="breadcrumb-item active">Gestion de Usuarios</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-success">Agregar Usuario</button>

            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="usuarios" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 tablas">
                        <thead>
                            <tr>
                                <th width="10px">#</th>
                                <th>Nombre y Apellidos</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th width="60px">Foto</th>
                                <th>Ultimo Login</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                                <td>AQUI VA EL NOMBRE</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['usuario'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['i']->value['estado'] == "1") {?>
                                    <span class="label label-success ">Activo</span> <?php } else { ?>
                                    <span class="label label-warning ">Inactivo</span> <?php }?>
                                </td>
                                <td><?php if ($_smarty_tpl->tpl_vars['i']->value['foto'] == '') {?>
                                    <img src="img/users/anonymous.png " class="img-thumbnail " width="50px "> <?php } else { ?>
                                    <!--Aqui va la foto-->
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ultimoLogin'];?>
</td>
                                <td>
                                    <div class="form-group ">
                                        <button class="btn btn-xs btn-warning ">
                                            <i class="fa fa-pencil "></i>
                                        </button>
                                        <button class="btn btn-xs btn-danger ">
                                            <i class="fa fa-times "></i>
                                        </button>
                                        <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-tel">
                                            <i class="fa fa-phone"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->

<div id="modal-tel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Medium model</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal --><?php }
}
