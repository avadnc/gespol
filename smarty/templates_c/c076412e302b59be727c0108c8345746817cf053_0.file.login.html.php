<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-08 05:05:10
  from '/var/www/html/gespol/smarty/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5be3c4066d3c24_56574574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c076412e302b59be727c0108c8345746817cf053' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/login.html',
      1 => 1541619915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3c4066d3c24_56574574 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="h-p100">
    <div class="container h-p100">
        <div class="row h-p100 align-items-center justify-content-md-center">
            <div class="col-lg-4 col-md-8 col-12">
                <div class="box box-body rounded">
                    <h3 class="login-box-msg">Entrar al Sistema</h3>
                    <form method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="ingUsuario" placeholder="Usuario">
                            <span class="ion ion-person form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="ingPassword" placeholder="Password">
                            <span class="ion ion-locked form-control-feedback"></span>
                        </div>
                        <!-- /.col -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-info btn-rounded btn-block mb-15">Entrar</button>
                        </div>
                        <!-- /.col -->
                </div>
                <?php  $login = new ControladorUsuarios(); $login->ctrIngresoUsuario(); ?>
                </form>
            </div>
        </div>
    </div>
    </div>
</section><?php }
}
