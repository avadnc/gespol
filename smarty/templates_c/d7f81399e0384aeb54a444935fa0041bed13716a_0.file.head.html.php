<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-08 05:11:58
  from '/var/www/html/gespol/smarty/templates/compartido/head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5be3c59ee8fae9_46588108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f81399e0384aeb54a444935fa0041bed13716a' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/compartido/head.html',
      1 => 1541653914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3c59ee8fae9_46588108 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title><?php echo $_smarty_tpl->tpl_vars['aplicacion']->value;?>
</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/master_style.css">

    <!-- Unique_Admin skins -->
    <link rel="stylesheet" href="css/skins/_all-skins.css">
    <!--Data tables responsive-->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>

    <!--<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo '</script'; ?>
>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"><?php }
}
