<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:03
  from 'E:\wamp64\www\TGPK\modules\amazonpay\views\templates\hook\loginButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e77fd761_24228494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c367b47f1438c0a9daa1915851aea465939fa5d' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\amazonpay\\views\\templates\\hook\\loginButton.tpl',
      1 => 1671501560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/button.tpl' => 1,
  ),
),false)) {
function content_63ab93e77fd761_24228494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="amzbuttoncontainer">
    <h3 class="page-subheading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use your Amazon Account','mod'=>'amazonpay'),$_smarty_tpl ) );?>

    </h3>
    <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With Amazon Pay and Login with Amazon, you can easily sign-in and use the shipping and payment information stored in your Amazon Account to place an order on this shop.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

    </p>
    <?php $_smarty_tpl->_subTemplateRender("file:./_partials/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('AmazonPayButtonPlacement'=>'Cart','AmazonPayButtonID'=>$_smarty_tpl->tpl_vars['loginButtonId']->value,'AmazonPayButtonClasses'=>'amazonLogin'), 0, false);
?>
</div>
<?php }
}
