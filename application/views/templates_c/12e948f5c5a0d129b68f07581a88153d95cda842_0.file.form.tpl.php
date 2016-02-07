<?php /* Smarty version 3.1.27, created on 2015-12-22 18:39:48
         compiled from "D:\projects\codeigniter\application\views\templates\login\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3245556793684d2f4b3_38903931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e948f5c5a0d129b68f07581a88153d95cda842' => 
    array (
      0 => 'D:\\projects\\codeigniter\\application\\views\\templates\\login\\form.tpl',
      1 => 1450773106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245556793684d2f4b3_38903931',
  'variables' => 
  array (
    'errors' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56793684dac115_49750273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56793684dac115_49750273')) {
function content_56793684dac115_49750273 ($_smarty_tpl) {
if (!is_callable('smarty_function_errors')) require_once 'D:\\projects\\codeigniter\\application\\third_party\\smarty\\libraries\\plugins\\function.errors.php';
if (!is_callable('smarty_function_required')) require_once 'D:\\projects\\codeigniter\\application\\third_party\\smarty\\libraries\\plugins\\function.required.php';
if (!is_callable('smarty_function_set_value')) require_once 'D:\\projects\\codeigniter\\application\\third_party\\smarty\\libraries\\plugins\\function.set_value.php';

$_smarty_tpl->properties['nocache_hash'] = '3245556793684d2f4b3_38903931';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Login form"), 0);
?>


<div class="container">
	<div class="content">
		<style>
		
		.error p {color:red !important;}
		
		</style>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value) {
echo smarty_function_errors(array(),$_smarty_tpl);
}?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
login/" method="post">
			<input type="hidden" name="mode" value="submit">
			<table>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
E-mail address</th>
					<td><input type="text" name="email" value="<?php echo smarty_function_set_value(array('name'=>"email"),$_smarty_tpl);?>
"></td>
				</tr>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
Password</th>
					<td><input type="password" name="password" value="<?php echo smarty_function_set_value(array('name'=>"password"),$_smarty_tpl);?>
"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>