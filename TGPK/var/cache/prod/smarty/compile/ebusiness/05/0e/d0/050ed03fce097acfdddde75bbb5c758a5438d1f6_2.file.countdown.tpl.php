<?php
/* Smarty version 3.1.47, created on 2022-12-28 07:55:09
  from 'E:\wamp64\www\TGPK\modules\ets_countdown\views\templates\hook\countdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab93edb0c042_41990639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050ed03fce097acfdddde75bbb5c758a5438d1f6' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ets_countdown\\views\\templates\\hook\\countdown.tpl',
      1 => 1672188837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab93edb0c042_41990639 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ets_cd_block">
    <?php if ($_smarty_tpl->tpl_vars['ETS_CD_TITLE_COUNT_DOWN']->value) {?>
        <div class="title-click"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CD_TITLE_COUNT_DOWN']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }?>
    <div class="ets-cd-countdown alignment-center <?php if ($_smarty_tpl->tpl_vars['ETS_CD_DISPLAY_TYPE']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CD_DISPLAY_TYPE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>normal<?php }?>" data-datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['to_specific_prices']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-text_color="<?php if ($_smarty_tpl->tpl_vars['ETS_CD_TIME_UNIT_COLOR']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CD_TIME_UNIT_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>" data-box_color="<?php if ($_smarty_tpl->tpl_vars['ETS_CD_BACKGROUND_COLOR']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CD_BACKGROUND_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#0000000<?php }?>" data-animate-type="<?php if ($_smarty_tpl->tpl_vars['ETS_CD_DISPLAY_TYPE']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CD_DISPLAY_TYPE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>normal<?php }?>" data-trans-days="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days','mod'=>'ets_countdown'),$_smarty_tpl ) );?>
" data-trans-hours="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours','mod'=>'ets_countdown'),$_smarty_tpl ) );?>
"  data-trans-minutes="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minutes','mod'=>'ets_countdown'),$_smarty_tpl ) );?>
" data-trans-seconds="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seconds','mod'=>'ets_countdown'),$_smarty_tpl ) );?>
">
        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['to_specific_prices']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </div>
</div>
<?php }
}
