<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:03
  from 'E:\wamp64\www\TGPK\modules\ets_htmlbox\views\templates\hook\display-hooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e7c3de59_38311649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939847f7f8928eaac0577d1c77defe86caa19ba3' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_htmlbox\\views\\templates\\hook\\display-hooks.tpl',
      1 => 1672094880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e7c3de59_38311649 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['hooks']->value)) && sizeof($_smarty_tpl->tpl_vars['hooks']->value) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
        <style>
            <?php echo $_smarty_tpl->tpl_vars['hook']->value['style'];?>

        </style>
        <?php echo $_smarty_tpl->tpl_vars['hook']->value['html'];?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
