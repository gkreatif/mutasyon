<?php /* Smarty version 3.1.27, created on 2016-04-04 20:49:18
         compiled from "/var/www/html/mcopy/themes/default/event/addevent.html" */ ?>
<?php
/*%%SmartyHeaderCode:14558300675702a91e8bacd1_74179963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd45cf06954363820d7f613fdaaa572dfff0c8d07' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/event/addevent.html',
      1 => 1456420606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14558300675702a91e8bacd1_74179963',
  'variables' => 
  array (
    '_add_event' => 0,
    '_detail' => 0,
    '_event_level' => 0,
    '_event_three' => 0,
    '_event_two' => 0,
    '_event_one' => 0,
    '_date' => 0,
    '_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a91e8ce481_72143141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a91e8ce481_72143141')) {
function content_5702a91e8ce481_72143141 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mcopy/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '14558300675702a91e8bacd1_74179963';
?>
<!--Add Event-->
	  <div class="collapse topwind" id="addevent">
	    <div class="well">
	    <button type="button" class="close addeventm" data-toggle="collapse" href="#addevent"><span aria-hidden="true">×</span></button>
	      <form class="noload" action="events.php" method="POST">
		<h4><?php echo $_smarty_tpl->tpl_vars['_add_event']->value;?>
</h4>
		<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</label>
		<textarea type="textarea" name="addeventdetail" class="form-control"></textarea>
		<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_event_level']->value;?>
</label>
		<select class="form-control" name="addeventlevel">
		    <option value="3"><?php echo $_smarty_tpl->tpl_vars['_event_three']->value;?>
</option>
		    <option value="2"><?php echo $_smarty_tpl->tpl_vars['_event_two']->value;?>
</option>
		    <option value="1"><?php echo $_smarty_tpl->tpl_vars['_event_one']->value;?>
</option>
		</select>
		<label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
		<input type="date" name="addeventdate" class="form-control" value="<?php ob_start();
echo smarty_modifier_date_format("+1 days",'%Y-%m-%d');
$_tmp1=ob_get_clean();
echo $_tmp1;?>
" />
		<button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_add']->value;?>
</button>
	      </form>
	    </div>
	  </div>
<!--/Add Event-->  
<?php }
}
?>