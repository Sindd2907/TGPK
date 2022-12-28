<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:56:56
  from 'E:\wamp64\www\TGPK\themes\ebusiness\modules\ybc_blog_free\views\templates\hook\home_blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab94585de8c2_22111471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c5171562c1438315f680b51d2b86539587a13ee' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\modules\\ybc_blog_free\\views\\templates\\hook\\home_blocks.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab94585de8c2_22111471 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK_HOME']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock','page'=>'home'),$_smarty_tpl ) );?>

<?php }
}
}
