<?php
/* Smarty version 3.1.47, created on 2022-12-28 08:23:15
  from 'E:\wamp64\www\TGPK\themes\ebusiness\modules\ps_emailalerts\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab9a834f9c51_04735592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff7fc09961db187d8288f46278e4d1041df63917' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab9a834f9c51_04735592 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
">
    <span class="link-item">
        <i class="material-icons">notifications_none</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Modules.Mailalerts.Shop'),$_smarty_tpl ) );?>

    </span>
  </a>

<?php }
}
