<?php
/* Smarty version 3.1.47, created on 2022-12-28 08:35:18
  from 'E:\wamp64\www\TGPK\modules\ybc_themeconfig\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ab9d56776776_36027883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a365676d7a1921c7fdca30010ec610ee461fdf' => 
    array (
      0 => 'E:\\wamp64\\www\\TGPK\\modules\\ybc_themeconfig\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1672082031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ab9d56776776_36027883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36473920563ab9d566fab65_67199085', "input_row");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102928454563ab9d567173c9_92457055', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188187685763ab9d5674bd10_69054112', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_36473920563ab9d566fab65_67199085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_36473920563ab9d566fab65_67199085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'BEGIN_FORM' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'END_FORM') {?>    
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'BEGIN_FORM') {?><div class="ybc-form"><div class="ybc-form-left"><?php if ((isset($_smarty_tpl->tpl_vars['input']->value['html']))) {
echo $_smarty_tpl->tpl_vars['input']->value['html'];
}?></div><div class="ybc-form-right"><?php }?>    
        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'END_FORM') {?>
            <input type="hidden" name="submited_tab" value="<?php if ((isset($_GET['submited_tab']))) {
echo $_GET['submited_tab'];
} else { ?>ybc_tab_general<?php }?>" /></div></div>
            <?php echo '<script'; ?>
 type="text/javascript">
                
                $(document).ready(function(){                   
                    if($('.ybc_fancy').length > 0)
                    {
                        $('.ybc_fancy').fancybox();
                    }
                });
                
            <?php echo '</script'; ?>
>
        <?php }?>
    <?php } else { ?>
        <div class="ybc-form-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['group'])) && $_smarty_tpl->tpl_vars['input']->value['group']) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['group'];
}?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['separator'])) && $_smarty_tpl->tpl_vars['input']->value['separator']) {?> ybc-tc-separator<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['is_custom_color'])) && $_smarty_tpl->tpl_vars['input']->value['is_custom_color']) {?> ybc_custom_color<?php }?>">            
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['info'])) && $_smarty_tpl->tpl_vars['input']->value['info']) {?>
                <div class="ybc_tc_info alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['input']->value['info'];?>
</div>
            <?php }?>
        </div>
    <?php }
}
}
/* {/block "input_row"} */
/* {block "field"} */
class Block_102928454563ab9d567173c9_92457055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_102928454563ab9d567173c9_92457055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] != 'backgroundimg' && $_smarty_tpl->tpl_vars['input']->value['type'] != 'file' && $_smarty_tpl->tpl_vars['input']->value['name'] != 'BEGIN_FORM' && $_smarty_tpl->tpl_vars['input']->value['name'] != 'END_FORM' && $_smarty_tpl->tpl_vars['input']->value['name'] != 'IMPORT_DATA') {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'YBC_TC_CACHE_CSS') {?>
            <a class="ybc_tc_clear_cache" href="<?php echo $_smarty_tpl->tpl_vars['clear_cache_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear cache','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
</a>
        <?php }?>    
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'IMPORT_DATA') {?>
        <div class="col-lg-9">
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['sections'])) && $_smarty_tpl->tpl_vars['input']->value['sections']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['sections'], 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                    <input type="checkbox" name="IMPORT_DATA[]" value="<?php echo $_smarty_tpl->tpl_vars['section']->value['id'];?>
" id="IMPORT_DATA_<?php echo $_smarty_tpl->tpl_vars['section']->value['id'];?>
" /> <label style="font-weight: normal;" for="IMPORT_DATA_<?php echo $_smarty_tpl->tpl_vars['section']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
</label><br />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <input type="submit" name="SUBMIT_IMPORT" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import sample data','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
" class="button btn btn-default" id="ybc_submit_import" />
                <?php if ((isset($_smarty_tpl->tpl_vars['devMode']->value)) && $_smarty_tpl->tpl_vars['devMode']->value) {?>
                    <input type="submit" name="SUBMIT_EXPORT" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export sample data to sql files','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
" class="button btn btn-default" id="ybc_submit_export" />
                <?php }?>
                <div style="display: none;" id="ybc_import_warning_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are going to overried your old data of the selected section(s). Do you confirm?','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
</div>
                <div style="display: none;" id="ybc_export_warning_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are going to overried all sample data. Do you confirm?','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
</div>
                <div class="ybc-tc-import-loading"><img src="<?php echo $_smarty_tpl->tpl_vars['module_path']->value;?>
img/loading-admin.gif" /></div>
            <?php }?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'backgroundimg') {?>
        <div class="col-lg-9">
            <input type="hidden" id="YBC_TC_BG_IMG" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['YBC_TC_BG_IMG'];?>
" />
            <ul style="float: left; padding: 0; margin-top: 5px;">
                <?php if ($_smarty_tpl->tpl_vars['input']->value['bgs']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['bgs'], 'bg');
$_smarty_tpl->tpl_vars['bg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bg']->value) {
$_smarty_tpl->tpl_vars['bg']->do_else = false;
?>
                        <li style="list-style: none; cursor: pointer; display: inline-block; margin: 0 2px;"><span class="ybc-img-span" rel=<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
 style="width: 50px; height: 50px; display: inline-block; background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/ybc_themeconfig/bgs/<?php echo $_smarty_tpl->tpl_vars['bg']->value;?>
.png'); border: 1px solid <?php if ($_smarty_tpl->tpl_vars['fields_value']->value['YBC_TC_BG_IMG'] == $_smarty_tpl->tpl_vars['bg']->value) {?>#0176B5<?php } else { ?>#eee<?php }?>;"></span></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
        </div>        
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && (isset($_smarty_tpl->tpl_vars['input']->value['display_img'])) && $_smarty_tpl->tpl_vars['input']->value['display_img']) {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        <label class="control-label col-lg-3" style="font-style: italic;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploaded image: ','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-9">
    		<a  class="ybc_fancy" href="<?php echo $_smarty_tpl->tpl_vars['input']->value['display_img'];?>
"><img title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to see full size image','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
" style="display: inline-block; max-width: 200px;" src="<?php echo $_smarty_tpl->tpl_vars['input']->value['display_img'];?>
" /></a>
            <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['img_del_link'])) && $_smarty_tpl->tpl_vars['input']->value['img_del_link'] && !((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'])) {?>
                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this image?','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
');" style="display: inline-block; text-decoration: none!important;" href="<?php echo $_smarty_tpl->tpl_vars['input']->value['img_del_link'];?>
"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete"></i></span></a>
            <?php }?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file') {?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            $('.ybc-img-span').click(function(){
                $('#YBC_TC_BG_IMG').val($(this).attr('rel'));
                $('.ybc-img-span').css('border-color','#eee');
                $(this).css('border-color','#0176B5');
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_188187685763ab9d5674bd10_69054112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_188187685763ab9d5674bd10_69054112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\wamp64\\www\\TGPK\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
		<div class="panel-footer">
            <?php if ((isset($_smarty_tpl->tpl_vars['reset_url']->value)) && $_smarty_tpl->tpl_vars['reset_url']->value) {?>
                <a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset to default parameters','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are going to reset all parameters to default. Do you confirm?','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['reset_url']->value;?>
"><i class="process-icon-refresh"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'ybc_themeconfig'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            <div class="ybc-tc-loading"><img src="<?php echo $_smarty_tpl->tpl_vars['module_path']->value;?>
img/loading-admin.gif" /></div>
            <?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
			<button type="submit" value="1"	id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1));
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];
} else {
echo $_smarty_tpl->tpl_vars['submit_action']->value;
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];
} else { ?>btn btn-default pull-right<?php }?>">
				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];
} else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

			</button>
			<?php }?>            
		</div>
	<?php }
}
}
/* {/block "footer"} */
}
