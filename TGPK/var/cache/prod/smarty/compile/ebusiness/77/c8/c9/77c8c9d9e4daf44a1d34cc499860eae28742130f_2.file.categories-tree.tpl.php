<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:05
  from 'E:\wamp64\www\TGPK\modules\ets_megamenu\views\templates\hook\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e9593e09_61675757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c8c9d9e4daf44a1d34cc499860eae28742130f' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_megamenu\\views\\templates\\hook\\categories-tree.tpl',
      1 => 1672082030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e9593e09_61675757 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
    <ul class="ets_mm_categories">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['sub'])) && $_smarty_tpl->tpl_vars['category']->value['sub']) {?>class="has-sub"<?php }?>>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(intval($_smarty_tpl->tpl_vars['category']->value['id_category'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['sub'])) && $_smarty_tpl->tpl_vars['category']->value['sub']) {
echo $_smarty_tpl->tpl_vars['category']->value['sub'];
}?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
