<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:03
  from 'E:\wamp64\www\TGPK\modules\tidiolivechat\views\templates\front\widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e7e0c003_92398813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7695400eaf8bedce44a7b50d08e1718954ba8216' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\tidiolivechat\\views\\templates\\front\\widget.tpl',
      1 => 1672166144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e7e0c003_92398813 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgetUrl']->value) {?>
    <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widgetUrl']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" async><?php echo '</script'; ?>
>
<?php }
}
}
