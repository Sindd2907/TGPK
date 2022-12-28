<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:56:56
  from 'E:\wamp64\www\TGPK\themes\ebusiness\modules\ybc_blog_free\views\templates\hook\latest_posts_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab9458699960_49657829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc086901f9943444f773b2f8d56b759200d9bab0' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\modules\\ybc_blog_free\\views\\templates\\hook\\latest_posts_block.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab9458699960_49657829 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <div class="block ybc_block_latest <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_RTL_CLASS'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value) {?>page_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>page_blog<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value == 'home') {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_HOME_POST_TYPE'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_HOME_POST_TYPE'] == 'default' || count($_smarty_tpl->tpl_vars['posts']->value) <= 1) {?>ybc_block_default<?php } else { ?>ybc_block_slider<?php }
} else {
if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SIDEBAR_POST_TYPE'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_SIDEBAR_POST_TYPE'] == 'default' || count($_smarty_tpl->tpl_vars['posts']->value) <= 1) {?>ybc_block_default<?php } else { ?>ybc_block_slider<?php }
}?>">
        <h4 class="h1 products-section-title text-uppercase">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From our blog','mod'=>'YBC_BLOG_FREE'),$_smarty_tpl ) );?>
</span>
        </h4>
        <ul class="block_content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <li> 
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['thumb']) {?><a class="ybc_item_img" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" /></a><?php }?>
                    <div class="ybc-blog-latest-post-content">
                        <a class="ybc_title_block" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                        <div class="ybc-blog-sidear-post-meta">
                            <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['categories'])) && $_smarty_tpl->tpl_vars['post']->value['categories']) {?>
                                <div class="ybc-blog-categories">
                                    <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                    <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['post']->value['categories']));?>                        
                                    <div class="be-categories">
                                        <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'YBC_BLOG_FREE'),$_smarty_tpl ) );?>
: </span>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                                            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['cat']->value['title']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalCat']->value) {?><span class="comma">, </span><?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            <?php }?>
                            <span class="post-date"><?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT'],strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('F jS Y',strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
                        
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['allowComments']->value || $_smarty_tpl->tpl_vars['show_views']->value || $_smarty_tpl->tpl_vars['allow_like']->value) {?> 
                            <div class="ybc-blog-latest-toolbar">
                                <span class="post-date">
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT'])) && $_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT']) {?>
                                    <span class="be-label"></span>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_DATE_FORMAT'],strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <span class="be-label"></span>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('F jS Y',strtotime($_smarty_tpl->tpl_vars['post']->value['datetime_added'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                                </span>
                        
                                   
                                <?php if ($_smarty_tpl->tpl_vars['allowComments']->value) {?>
                                    <span class="ybc-blog-latest-toolbar-comments pull-right">
                                        <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['post']->value['comments_num']), ENT_QUOTES, 'UTF-8');?>

                                        <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_num'] > 1) {?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'YBC_BLOG_FREE'),$_smarty_tpl ) );?>
</span>
                                        <?php } else { ?>
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','mod'=>'YBC_BLOG_FREE'),$_smarty_tpl ) );?>
</span>
                                        <?php }?>
                                    </span> 
                                <?php }?>                                 
                                                                
                            </div>
                        <?php }?>                           
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['short_description']) {?>
                            <div class="blog_description"><p>
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_POST_EXCERPT_LENGTH'])) && (int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_POST_EXCERPT_LENGTH'] > 0) {?>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['post']->value['short_description']),(int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_POST_EXCERPT_LENGTH'],'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['post']->value['short_description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php }?></p>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['description']) {?>
                            <div class="blog_description">
                                <?php if ((isset($_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_POST_EXCERPT_LENGTH'])) && (int)$_smarty_tpl->tpl_vars['blog_config']->value['YBC_BLOG_FREE_POST_EXCERPT_LENGTH'] > 0) {?>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['post']->value['description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['post']->value['description']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php }?>                                
                            </div>
                        <?php }?>
                        <a class="read_more" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more ...','mod'=>'YBC_BLOG_FREE'),$_smarty_tpl ) );?>
</a>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="clear"></div>
    </div>
    
<?php }
}
}
