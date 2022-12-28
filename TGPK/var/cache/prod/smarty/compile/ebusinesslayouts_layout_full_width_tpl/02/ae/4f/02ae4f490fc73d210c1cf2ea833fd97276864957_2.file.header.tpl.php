<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:06
  from 'E:\wamp64\www\TGPK\themes\ebusiness\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93eae26ea6_10200360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ae4f490fc73d210c1cf2ea833fd97276864957' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\themes\\ebusiness\\templates\\_partials\\header.tpl',
      1 => 1672082032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93eae26ea6_10200360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="header_content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196264164663ab93eae1bb64_25535648', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57146077163ab93eae1e4f2_84469888', 'header_top');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMLS'),$_smarty_tpl ) );
}
/* {block 'header_nav'} */
class Block_196264164663ab93eae1bb64_25535648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_196264164663ab93eae1bb64_25535648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
        <div class="nav">
            <div class="left-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybcCustom4'),$_smarty_tpl ) );?>

                          </div>
            <div class="right-nav">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_57146077163ab93eae1e4f2_84469888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_57146077163ab93eae1e4f2_84469888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="pull-xs-left hidden-md-up text-xs-center mobile closed" id="menu-icon">
          <i class="material-icons d-inline menu">menu</i>
        </div>
        <div class="col-md-2" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value && (isset($_smarty_tpl->tpl_vars['logo_url']->value)) && $_smarty_tpl->tpl_vars['logo_url']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['logo_url']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-10 col-sm-12 position-static header_right_mobile">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

            <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
