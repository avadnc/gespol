<?php
/* Smarty version 3.1.34-dev-5, created on 2018-11-07 18:13:15
  from '/var/www/html/gespol/smarty/templates/compartido/footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-5',
  'unifunc' => 'content_5be32b3b3f4961_02985930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778cc432932c1336fbb15d96b5fc732ce96f99b8' => 
    array (
      0 => '/var/www/html/gespol/smarty/templates/compartido/footer.html',
      1 => 1541612705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be32b3b3f4961_02985930 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<!-- /.content-wrapper -->

<?php
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

</body>

</html><?php }
}
