<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:56:56
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab945834fbf5_50907395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1672082032,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_63ab945834fbf5_50907395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="newproducts_block" class="home_block_col">
  <h4 class="home_block_col_title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New arrivals','d'=>'Modules.Newproducts.Shop'),$_smarty_tpl ) );?>
</span></h4>
  <div class="products">
    <?php $_smarty_tpl->_assignInScope('is', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] != '') {?>    
            <?php if ($_smarty_tpl->tpl_vars['is']->value%$_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] == 0) {?>    
                <div class="group_item_product">
            <?php }?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('is', $_smarty_tpl->tpl_vars['is']->value+1);?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] != '') {?>
            <?php if ($_smarty_tpl->tpl_vars['is']->value%$_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] == 0) {?>
                </div>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] != '') {?>
        <?php if ($_smarty_tpl->tpl_vars['is']->value%$_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_NUMBER_GROUP'] != 0) {?>
                </div>
        <?php }?>
    <?php }?>
  </div>
</section>

<?php }
}
