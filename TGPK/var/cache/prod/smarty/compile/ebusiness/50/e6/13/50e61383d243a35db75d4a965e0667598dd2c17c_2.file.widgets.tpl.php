<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:04
  from 'E:\wamp64\www\TGPK\themes\ebusiness\modules\ybc_widget\views\templates\hook\widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e8ce12e2_31817723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e61383d243a35db75d4a965e0667598dd2c17c' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\modules\\ybc_widget\\views\\templates\\hook\\widgets.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e8ce12e2_31817723 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['widget_hook']->value == "display-top-column") {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value == "index") {?>
            <div class="home_widget_top_column">
                <div class="container">
                    <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
 row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                            <li class="ybc-widget-item">
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>                                
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php }?>
    <?php } elseif (($_smarty_tpl->tpl_vars['widget_hook']->value == "display-left-column" || $_smarty_tpl->tpl_vars['widget_hook']->value == "display-right-column")) {?>
        <div class="block hidden-sm-down">
            <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
 block_content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "display-footer") {?>
        <section class="footer-block col-xs-12 col-sm-2">
            <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <div class="block_content toggle-footer">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "display-home") {?>
        <section class="home-block">
            <div class="container">
                <div class="row">
                    <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                            <li class="ybc-widget-item col-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                    <a class="ybc-widget-img-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                                <div class="block_description">
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?>
                                        <a class="ybc-widget-item-link btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop now','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

                                        </a>
                                    <?php }?>
                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-ybcpaymentlogo-hook") {?>
        <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-footer-links") {?>
        <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <li class="ybc-widget-item">
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>                    
                    <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul> 
    <?php } elseif ($_smarty_tpl->tpl_vars['widget_hook']->value == "ybc-custom-3") {?>
        <div class="custom-text">
            <div class="custom_service">
                <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                        <li class="">
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>                    
                            <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul> 
            </div>
        </div>
        <div class="clearfix"></div>
    <?php } else { ?>
        <ul class="ybc-widget-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_hook']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <li class="ybc-widget-item">
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['icon']) {?><i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_image'] && $_smarty_tpl->tpl_vars['widget']->value['image']) {
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_module_path']->value, ENT_QUOTES, 'UTF-8');?>
images/widget/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');?>
" /><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }
}?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_title'] && $_smarty_tpl->tpl_vars['widget']->value['title']) {?><h4 class="ybc-widget-title"><?php if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['widget']->value['link']) {?></a><?php }?></h4><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['show_description'] && $_smarty_tpl->tpl_vars['widget']->value['description']) {?><div class="ybc-widget-description"><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</div><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }
}
}
}
