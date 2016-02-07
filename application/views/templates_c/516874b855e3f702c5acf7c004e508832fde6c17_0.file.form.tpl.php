<?php /* Smarty version 3.1.27, created on 2015-12-28 14:06:12
         compiled from "D:\projects\ci_sample\application\views\templates\register\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:238855680df645327b7_08006048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516874b855e3f702c5acf7c004e508832fde6c17' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\register\\form.tpl',
      1 => 1450773099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238855680df645327b7_08006048',
  'variables' => 
  array (
    'errors' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5680df64622be2_94188620',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5680df64622be2_94188620')) {
function content_5680df64622be2_94188620 ($_smarty_tpl) {
if (!is_callable('smarty_function_required')) require_once 'D:\\projects\\ci_sample\\application\\third_party\\smarty\\libraries\\plugins\\function.required.php';
if (!is_callable('smarty_function_set_value')) require_once 'D:\\projects\\ci_sample\\application\\third_party\\smarty\\libraries\\plugins\\function.set_value.php';

$_smarty_tpl->properties['nocache_hash'] = '238855680df645327b7_08006048';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Register user form"), 0);
?>


<div class="container">
	<div class="content">
		<style>
		
		.error p {color:red !important;}
		
		</style>
		<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
register/" method="post">
			<input type="hidden" name="mode" value="confirm">
			<table>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
Name</th>
					<td>
						<input type="text" name="name" value="<?php echo smarty_function_set_value(array('name'=>"name"),$_smarty_tpl);?>
">
					</td>
				</tr>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
E-mail address</th>
					<td>
						<input type="text" name="email" value="<?php echo smarty_function_set_value(array('name'=>"email"),$_smarty_tpl);?>
">
					</td>
				</tr>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
Password</th>
					<td>
						<input type="password" name="password" value="<?php echo smarty_function_set_value(array('name'=>"password"),$_smarty_tpl);?>
">
					</td>
				</tr>
				<tr>
					<th><?php echo smarty_function_required(array(),$_smarty_tpl);?>
Confirm password</th>
					<td>
						<input type="password" name="passconf" value="<?php echo smarty_function_set_value(array('name'=>"passconf"),$_smarty_tpl);?>
">
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div><!-- /.content -->
</div><!-- /.container -->
	
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>