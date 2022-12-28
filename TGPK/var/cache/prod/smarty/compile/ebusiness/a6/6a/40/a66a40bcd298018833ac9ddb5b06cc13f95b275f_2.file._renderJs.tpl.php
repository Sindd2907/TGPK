<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:09
  from 'E:\wamp64\www\TGPK\modules\ets_purchasetogether\views\templates\hook\_renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93ed131e30_38416997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a66a40bcd298018833ac9ddb5b06cc13f95b275f' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_purchasetogether\\views\\templates\\hook\\_renderJs.tpl',
      1 => 1672082030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93ed131e30_38416997 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var PC_ETS_VER_17 = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_VER_17']->value), ENT_QUOTES, 'UTF-8');?>
;
var PC_ETS_VER_16 = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_VER_16']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value)) && $_smarty_tpl->tpl_vars['configs']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configs']->value, 'config', false, 'id');
$_smarty_tpl->tpl_vars['config']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['config']->value) {
$_smarty_tpl->tpl_vars['config']->do_else = false;
?>
var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
var PC_ETS_REDIRECT_URL = '<?php echo $_smarty_tpl->tpl_vars['redirectURL']->value;?>
';
var PC_ETS_STATIC_TOKEN = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';
<?php echo '</script'; ?>
>
<?php }
}
