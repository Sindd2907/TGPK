<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:04
  from 'E:\wamp64\www\TGPK\themes\ebusiness\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e863cee8_23223842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02435853235fa805be37e4b45d010b3d5dd95d81' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\templates\\catalog\\listing\\category.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e863cee8_23223842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89601364763ab93e862bec6_32477409', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_89601364763ab93e862bec6_32477409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_89601364763ab93e862bec6_32477409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_NAME_CAT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_NAME_CAT'] == 1) {?>
        <h1 class="h1 title_category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1 || (isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'] == 1) {?>    
        <div class="block-category card card-block">
            <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1) {?>
                <div class="category-cover">
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_DESCRIPTION'] == 1) {?> 
          <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
          <?php }?>
          <?php }?>
        </div>
    <?php }
}
}
/* {/block 'product_list_header'} */
}
