<?php /* Smarty version 3.1.27, created on 2015-12-23 12:59:54
         compiled from "D:\projects\codeigniter\application\views\templates\login\success.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5989567a385a532ab2_41188231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2296c9d0ce028ef35bd1ec2d672e0105b2f8a960' => 
    array (
      0 => 'D:\\projects\\codeigniter\\application\\views\\templates\\login\\success.tpl',
      1 => 1450850382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5989567a385a532ab2_41188231',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567a385a575063_96290765',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567a385a575063_96290765')) {
function content_567a385a575063_96290765 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5989567a385a532ab2_41188231';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Register user form"), 0);
?>


<div class="container">
	<div class="content">
		<h2>login success</h2>
		<div>
			<dl>
				<dt>NAME</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</dd>
				<dt>E-MAIL ADDRESS</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</dd>
			</dl>
		</div>
	</div>
</div><!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>