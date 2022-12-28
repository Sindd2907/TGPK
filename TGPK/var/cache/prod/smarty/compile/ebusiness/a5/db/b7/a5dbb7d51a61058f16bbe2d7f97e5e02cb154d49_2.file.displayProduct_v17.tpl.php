<?php
/* Smarty version 3.1.47, created on 2022-12-28 08:23:02
  from 'E:\wamp64\www\TGPK\modules\ets_purchasetogether\views\templates\hook\displayProduct_v17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab9a7684f770_43508160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5dbb7d51a61058f16bbe2d7f97e5e02cb154d49' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_purchasetogether\\views\\templates\\hook\\displayProduct_v17.tpl',
      1 => 1672082030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ets_purchasetogether/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_63ab9a7684f770_43508160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 

<style type="text/css">
.quickview #ets_purchasetogether {
    display: none!important;
}
</style>

<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayFooterProduct') {?>
    <div id="ets_purchasetogether" class="ets_purchase_footerproduct">
<?php } elseif ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayProductAdditionalInfo') {?>
    <div id="ets_purchasetogether" class="ets_purchase_productaddition">
<?php } else { ?>
    <div id="ets_purchasetogether">
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_TYPE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_TYPE'] == 1) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['purchase_togethers']->value)) && $_smarty_tpl->tpl_vars['purchase_togethers']->value && count($_smarty_tpl->tpl_vars['purchase_togethers']->value) != $_smarty_tpl->tpl_vars['alldisabled']->value) {?>
        <h2 class="ets_purchase_title"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_TITLE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h2>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81480950163ab9a76745e32_48219081', 'product_miniature');
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="clear"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3969831463ab9a7674cc82_07854031', "purchase_together");
?>

    <?php }
} else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['purchase_togethers']->value)) && $_smarty_tpl->tpl_vars['purchase_togethers']->value && count($_smarty_tpl->tpl_vars['purchase_togethers']->value) != $_smarty_tpl->tpl_vars['alldisabled']->value) {?>
        <h2 class="ets_purchase_title"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_TITLE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h2>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193807884963ab9a767c2597_19050475', "purchase_together");
?>

    <?php }?>
    
<?php }?>
<div class="clearfix"></div>
<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayFooterProduct') {?>
    </div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_HOOK_TO'] == 'displayProductAdditionalInfo') {?>
    </div>
<?php } else { ?>
    </div>
<?php }?>

<?php }
/* {block 'product_miniature'} */
class Block_81480950163ab9a76745e32_48219081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_81480950163ab9a76745e32_48219081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:modules/ets_purchasetogether/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_price_and_shipping'} */
class Block_206211294563ab9a76762500_13629633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                <span class="product-price-and-shipping">
                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                    <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                </span>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_127751899863ab9a76772953_99282897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="product-description" itemprop="description">
                                <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                            </div>
                          <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_142429790963ab9a7677f107_42388002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['currProduct']->value),$_smarty_tpl ) );?>

                          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_130872798763ab9a767980d6_78858183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                        <span class="product-price-and-shipping">
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_73472735163ab9a767a9491_55847161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="product-description" itemprop="description">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                        <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                    </div>
                                  <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_150155031763ab9a767b4355_20734756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                  <?php
}
}
/* {/block 'product_reviews'} */
/* {block "purchase_together"} */
class Block_3969831463ab9a7674cc82_07854031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'purchase_together' => 
  array (
    0 => 'Block_3969831463ab9a7674cc82_07854031',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_206211294563ab9a76762500_13629633',
    1 => 'Block_130872798763ab9a767980d6_78858183',
  ),
  'product_description' => 
  array (
    0 => 'Block_127751899863ab9a76772953_99282897',
    1 => 'Block_73472735163ab9a767a9491_55847161',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_142429790963ab9a7677f107_42388002',
    1 => 'Block_150155031763ab9a767b4355_20734756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="ets-list-checkbox-product ets-list-content-checkbox">
                            <?php if (((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT'])) && !$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT']) && !((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'] && $_smarty_tpl->tpl_vars['currProduct']->value['quantity'] <= $_smarty_tpl->tpl_vars['currProduct']->value['out_of_stock'])) {?>
                <li class="item-product ">
                    <div class="row-product">
                    <div class="ets_purchase_item_image">
                        <input class=""
                            id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
" 
                            type="checkbox" 
                            checked="checked"
                            <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT']) {?>disabled="disabled"<?php }?>
                            name="product_current" />
                    </div>
                    <div class="ets_purchase_item_des">
                        <label for="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This current product','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
 (<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>)</label>
                        
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206211294563ab9a76762500_13629633', 'product_price_and_shipping', $this->tplIndex);
?>

                        <p class="attribute_small this-product"><?php if ((isset($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'], ENT_QUOTES, 'UTF-8');
}?></p>
                        <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127751899863ab9a76772953_99282897', 'product_description', $this->tplIndex);
?>

                        <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142429790963ab9a7677f107_42388002', 'product_reviews', $this->tplIndex);
?>
 
                        <?php }?>
                    </div> 
                    </div>                  
                </li>
            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                    <li class="item-product">
                        <div class="row-product">
                            <div class="ets_purchase_item_image">
                                <input type="checkbox" class=""
                                    checked="checked"
                                    data-id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"
                                    data-qty="<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                                    id="purchase_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
" 
                                    name="purchase_together[]" />
                            </div>
                            <div class="ets_purchase_item_des">
                                <label for="purchase_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
">
                                      <span class="product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name_attribute'],100,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                </label>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130872798763ab9a767980d6_78858183', 'product_price_and_shipping', $this->tplIndex);
?>

                                <p class="attribute_small"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['product']->value['attribute_small']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attribute_small'], ENT_QUOTES, 'UTF-8');
}?></p>
                                
                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73472735163ab9a767a9491_55847161', 'product_description', $this->tplIndex);
?>

                                <?php }?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150155031763ab9a767b4355_20734756', 'product_reviews', $this->tplIndex);
?>
 
                                <?php }?>
                            </div>
                        </div>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        	<div class="button-container <?php if (count($_smarty_tpl->tpl_vars['purchase_togethers']->value) == $_smarty_tpl->tpl_vars['alldisabled']->value) {?>disabled<?php }?>">
        		<a class="ets_ajax_add_to_cart_button btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_cart']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
">
        			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
        		</a>
        	</div>
        <?php
}
}
/* {/block "purchase_together"} */
/* {block 'product_thumbnail'} */
class Block_118570359163ab9a767d3ce1_99477893 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                      <img
                                        src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                      >
                                    </a>
                                <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_price_and_shipping'} */
class Block_63244851163ab9a767df8d1_76460154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                        <span class="product-price-and-shipping">
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['currProduct']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                        </span>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_34278976863ab9a767eed73_29275744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="product-description" itemprop="description">
                                        <?php if ($_smarty_tpl->tpl_vars['currProduct']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                        <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['currProduct']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                    </div>
                                  <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_22797639963ab9a767fb337_33958868 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['currProduct']->value),$_smarty_tpl ) );?>

                                  <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_thumbnail'} */
class Block_167193242363ab9a7680c310_97411570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                      <img
                                        src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                      >
                                    </a>
                                    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_price_and_shipping'} */
class Block_33096583563ab9a76819c39_08399434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price'] && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_PRICE']) {?>
                                            <span class="product-price-and-shipping">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_OLD_PRICE'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_OLD_PRICE']) {?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                                        <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage' && (isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_DISCOUNT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_DISCOUNT']) {?>
                                                      <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php }?>
                                                <?php }?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                                <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php }?>
                                    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description'} */
class Block_57419416963ab9a768331d8_65092350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="product-description" itemprop="description">
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));?>

                                            <?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_MAX_DESCRIPTION_LENGHT'],'...' ));
}?>
                                        </div>
                                      <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_reviews'} */
class Block_88641114463ab9a7683d746_08511329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                      <?php
}
}
/* {/block 'product_reviews'} */
/* {block "purchase_together"} */
class Block_193807884963ab9a767c2597_19050475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'purchase_together' => 
  array (
    0 => 'Block_193807884963ab9a767c2597_19050475',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_118570359163ab9a767d3ce1_99477893',
    1 => 'Block_167193242363ab9a7680c310_97411570',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_63244851163ab9a767df8d1_76460154',
    1 => 'Block_33096583563ab9a76819c39_08399434',
  ),
  'product_description' => 
  array (
    0 => 'Block_34278976863ab9a767eed73_29275744',
    1 => 'Block_57419416963ab9a768331d8_65092350',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_22797639963ab9a767fb337_33958868',
    1 => 'Block_88641114463ab9a7683d746_08511329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="ets-list-checkbox-product ets_purchase_type_list">
                                <?php if (((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT'])) && !$_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_CURRENT_PRODUCT']) && !((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_EXCLUDE_OUT_OF_STOCK'] && $_smarty_tpl->tpl_vars['currProduct']->value['quantity'] <= $_smarty_tpl->tpl_vars['currProduct']->value['out_of_stock'])) {?>
                    <li class="item-product">
                        <div class="row-product">
                            <div class="ets_purchase_item_image">
                                <input class=""
                                    id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"                                     type="checkbox" 
                                    checked="checked"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_REQUIRE_CURRENT_PRODUCT']) {?>disabled="disabled"<?php }?> 
                                    name="product_current" />
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118570359163ab9a767d3ce1_99477893', 'product_thumbnail', $this->tplIndex);
?>
     
                            </div>
                            <div class="ets_purchase_item_des">
                                <label for="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currProduct']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
 (<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>)</label>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63244851163ab9a767df8d1_76460154', 'product_price_and_shipping', $this->tplIndex);
?>

                                <p class="attribute_small this-product"><?php if ((isset($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['currProduct']->value['attribute_small']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['currProduct']->value['attribute_small'], ENT_QUOTES, 'UTF-8');
}?></p>
             
                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34278976863ab9a767eed73_29275744', 'product_description', $this->tplIndex);
?>

                                <?php }?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22797639963ab9a767fb337_33958868', 'product_reviews', $this->tplIndex);
?>
 
                                <?php }?>                        
                            </div>  
                        </div>                  
                    </li>
                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase_togethers']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['disabled'])) && !$_smarty_tpl->tpl_vars['product']->value['disabled']) {?>
                        <li class="item-product">
                            <div class="row-product">
                                <div class="ets_purchase_item_image">
                                    <input type="checkbox" class=""
                                        checked="checked"
                                        data-id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"
                                        data-qty="<?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DEFAULT_QUANTITY_ADDED_TO_CART'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>"
                                        id="purchase_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
" 
                                        name="purchase_together[]" />
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167193242363ab9a7680c310_97411570', 'product_thumbnail', $this->tplIndex);
?>

                                </div>
                                <div class="ets_purchase_item_des">
                                    <label for="purchase_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
">
                                          <span class="product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name_attribute'],100,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span>
                                    </label>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33096583563ab9a76819c39_08399434', 'product_price_and_shipping', $this->tplIndex);
?>

                                    <p class="attribute_small"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attribute_small'])) && $_smarty_tpl->tpl_vars['product']->value['attribute_small']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attribute_small'], ENT_QUOTES, 'UTF-8');
}?></p>
                                    
                                    <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_PRODUCT_DESCRIPTION']) {?>
                                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57419416963ab9a768331d8_65092350', 'product_description', $this->tplIndex);
?>

                                    <?php }?>
                                                                        <?php if ((isset($_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING'])) && $_smarty_tpl->tpl_vars['configs']->value['ETS_PT_DISPLAY_RATING']) {?>
                                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88641114463ab9a7683d746_08511329', 'product_reviews', $this->tplIndex);
?>
 
                                    <?php }?>
                                </div>
                            </div>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        	<div class="button-container <?php if (count($_smarty_tpl->tpl_vars['purchase_togethers']->value) == $_smarty_tpl->tpl_vars['alldisabled']->value) {?>disabled<?php }?>">
        		<a class="ets_ajax_add_to_cart_button btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_cart']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all products to cart'),$_smarty_tpl ) );?>
">
        			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add all products to cart','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
        		</a>
        	</div>
            
        <?php
}
}
/* {/block "purchase_together"} */
}
