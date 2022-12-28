<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:03
  from 'E:\wamp64\www\TGPK\modules\ybc_productimagehover\views\templates\hook\renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e7b01271_58132727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4db2175e665cad7b5486ebfcf871fe3cc0b397' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ybc_productimagehover\\views\\templates\\hook\\renderJs.tpl',
      1 => 1672082031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e7b01271_58132727 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
 var baseAjax ='<?php if ((isset($_smarty_tpl->tpl_vars['_PI_VER_17_']->value)) && $_smarty_tpl->tpl_vars['_PI_VER_17_']->value) {
echo $_smarty_tpl->tpl_vars['baseAjax']->value;
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['baseAjax']->value, ENT_QUOTES, 'UTF-8');
}?>';
 var YBC_PI_TRANSITION_EFFECT = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value, ENT_QUOTES, 'UTF-8');?>
';
 var _PI_VER_17_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_17_']->value), ENT_QUOTES, 'UTF-8');?>

 var _PI_VER_16_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_16_']->value), ENT_QUOTES, 'UTF-8');?>

<?php echo '</script'; ?>
><?php }
}
