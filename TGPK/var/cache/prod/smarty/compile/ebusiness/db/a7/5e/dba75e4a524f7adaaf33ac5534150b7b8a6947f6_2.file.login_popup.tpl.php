<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:06
  from 'E:\wamp64\www\TGPK\modules\ets_wishlist_pres17\views\templates\hook\login_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93ea511dc2_15977634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba75e4a524f7adaaf33ac5534150b7b8a6947f6' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_wishlist_pres17\\views\\templates\\hook\\login_popup.tpl',
      1 => 1672165895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93ea511dc2_15977634 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ets-wishlist-login">
    <div  tabindex="-1" role="dialog" aria-modal="true" class="ets-wishlist-modal modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div  class="modal-content">
                <div  class="modal-header">
                    <h5  class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'ets_wishlist_pres17'),$_smarty_tpl ) );?>
</h5> 
                    <button  type="button" data-dismiss="modal" class="close" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_wishlist_pres17'),$_smarty_tpl ) );?>
">
                        <span  aria-hidden="true">×</span>
                    </button>
                </div> 
                <div  class="modal-body">
                    <p  class="modal-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to be logged in to save products in your wish list.','mod'=>'ets_wishlist_pres17'),$_smarty_tpl ) );?>
</p>
                </div> 
                <div  class="modal-footer">
                    <button  type="button" data-dismiss="modal" class="modal-cancel btn btn-secondary">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ets_wishlist_pres17'),$_smarty_tpl ) );?>

                    </button> 
                    <a  type="button" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_login']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'ets_wishlist_pres17'),$_smarty_tpl ) );?>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="modal-backdrop fade"></div>
 </div><?php }
}
