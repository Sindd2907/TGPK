<?php
/* Smarty version 3.1.47, created on 2022-12-28 08:23:15
  from 'E:\wamp64\www\TGPK\modules\ets_wishlist_pres17\views\templates\hook\displayCustomerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab9a8354d4c4_86819315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6fc7242db5c25b5989817b64941b21c398a2b34' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_wishlist_pres17\\views\\templates\\hook\\displayCustomerAccount.tpl',
      1 => 1672165895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab9a8354d4c4_86819315 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="wishlist-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['list_wishlist_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
  <span class="link-item">
    <i class="material-icons">favorite</i>
    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title_wishlist_page']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

  </span>
</a><?php }
}
