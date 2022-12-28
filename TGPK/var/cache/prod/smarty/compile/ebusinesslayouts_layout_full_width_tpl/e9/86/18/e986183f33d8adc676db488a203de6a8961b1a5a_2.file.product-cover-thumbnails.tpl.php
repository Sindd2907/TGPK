<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:09
  from 'E:\wamp64\www\TGPK\themes\ebusiness\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93ed803c07_16869602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e986183f33d8adc676db488a203de6a8961b1a5a' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93ed803c07_16869602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'] != 'layout3') {?>
    <div class="images-container<?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'] == 'layout1') {?> vertical_thum_left<?php } else { ?> vertical_thum_right<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31573697363ab93ed7d0b87_98544119', 'product_cover');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113296062763ab93ed7dcd68_98656636', 'product_images');
?>

    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                if ($('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').length > 0) {
                    var img = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom'),
                        img_src = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').data('src');
                    img.zoom({
                        touch: false,
                        url: img_src
                    });
                }
            }, 200);
        });
    <?php echo '</script'; ?>
>
            <?php } elseif (((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PRODUCT_LAYOUT'] == 'layout3')) {?>
    <div class="images-container product_thumb_horizontal">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68955059063ab93ed7eb1e6_57735100', 'product_cover');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100624885263ab93ed7f6ee7_75728089', 'product_images');
?>

    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                if ($('.product_thumb_horizontal').length != '') {
                    $('.product_thumb_horizontal .product-images').owlCarousel({
                        items: 4,
                        responsive: {
                            // breakpoint from 0 up
                            0: {
                                items: 3,
                                margin: 10,
                            },
                            // breakpoint from 480 up
                            480: {
                                items: 4,
                                margin: 10,
                            },
                            // breakpoint from 768 up
                            768: {
                                items: 4
                            },
                            992: {
                                items: 4
                            }
                        },
                        nav: true,
                        loop: false,
                        rewindNav: false,
                        margin: 20,
                        dots: false,
                        navText: ['', ''],
                        callbacks: true,
                    });
                }
                ;
                if ($('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').length > 0) {
                    var img = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom'),
                        img_src = $('div:not(.quickview) .product_thumb_horizontal .product-cover.product-cover-zoom').data('src');
                    img.zoom({
                        touch: false,
                        url: img_src
                    });
                }
            }, 200);
        });
    <?php echo '</script'; ?>
>
<?php }
}
/* {block 'product_flags'} */
class Block_89406991063ab93ed7d76c5_38003838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="product-flags">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_31573697363ab93ed7d0b87_98544119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_31573697363ab93ed7d0b87_98544119',
  ),
  'product_flags' => 
  array (
    0 => 'Block_89406991063ab93ed7d76c5_38003838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover<?php if (((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_JQZOOM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_JQZOOM'] == 1)) {?> product-cover-zoom<?php }?>">
                <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                    <i class="material-icons material-icons-zoom_in"></i>
                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89406991063ab93ed7d76c5_38003838', 'product_flags', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_113296062763ab93ed7dcd68_98656636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_113296062763ab93ed7dcd68_98656636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                        <li class="thumb-container">
                            <img class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                                 data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                 data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                 width="100" itemprop="image">
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_flags'} */
class Block_178574655963ab93ed7f1c24_29022183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="product-flags">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_68955059063ab93ed7eb1e6_57735100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_68955059063ab93ed7eb1e6_57735100',
  ),
  'product_flags' => 
  array (
    0 => 'Block_178574655963ab93ed7f1c24_29022183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover<?php if (((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_JQZOOM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_JQZOOM'] == 1)) {?> product-cover-zoom<?php }?>">
                <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                    <i class="material-icons material-icons-zoom_in"></i>
                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178574655963ab93ed7f1c24_29022183', 'product_flags', $this->tplIndex);
?>

            </div>
        <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_100624885263ab93ed7f6ee7_75728089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_100624885263ab93ed7f6ee7_75728089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                        <li class="thumb-container">
                            <img
                                    class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                                    data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                    title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                    width="100"
                                    itemprop="image">
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php
}
}
/* {/block 'product_images'} */
}
