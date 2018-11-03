<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-03 20:17:30
  from '/var/www/html/gespol/smarty/templates/compartido/menulateral.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5bde025a79a6a3_31049354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d8cf67acfc32c482b0342a943febdeb9086dc0' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/compartido/menulateral.html',
      1 => 1541276246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bde025a79a6a3_31049354 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <span><?php echo $_smarty_tpl->tpl_vars['const_prefectura']->value;?>
</span>
                </a>
            </div>
            <div class="image">
                <img src="img/users/anonymous.png" class="rounded-circle" alt="User Image">
            </div>
            <div class="info">
                <p><?php echo $_smarty_tpl->tpl_vars['usuario_nombre']->value;?>
</p>
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ion ion-gear-b"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ion ion-android-mail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
            </div>
        </div>

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="nav-devider"></li>
            <li class="header nav-small-cap">COMISARIA</li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Tablero</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
</aside>

<!-- =============================================== --><?php }
}
