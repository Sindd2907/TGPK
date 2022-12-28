<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:05
  from 'E:\wamp64\www\TGPK\themes\ebusiness\modules\ybc_blog_free\views\templates\hook\blocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93e998ee73_86818196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1b8ff74f0a97647b7a1788afdee7ef70a5d3f88' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\modules\\ybc_blog_free\\views\\templates\\hook\\blocks.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93e998ee73_86818196 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'ybc_blog_free_page') {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_CATEGORIES_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_CATEGORIES_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogCategoriesBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_SEARCH_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_SEARCH_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogSearchBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_NEWS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_LATEST_NEWS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogNewsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_POST_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_POPULAR_POST_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogPopularPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_FEATURED_BLOCK']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogFeaturedPostsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_TAGS_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_TAGS_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogTagsBlock'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SHOW_GALLERY_BLOCK']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'blogGalleryBlock'),$_smarty_tpl ) );?>

    <?php }
}
}
}
