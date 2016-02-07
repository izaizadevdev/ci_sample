<?php /* Smarty version 3.1.27, created on 2015-12-24 18:33:39
         compiled from "D:\projects\ci_sample\application\views\templates\admin\top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:661567bd813aedf10_60367313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ecaa6733ce04bc2b7d9586d7db20d3c21e8270a' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\admin\\top.tpl',
      1 => 1450956816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '661567bd813aedf10_60367313',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567bd813b31114_02115111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567bd813b31114_02115111')) {
function content_567bd813b31114_02115111 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '661567bd813aedf10_60367313';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Register user form"), 0);
?>


<div class="container">
	<div class="content">
		<h2>ADMIN TOP</h2>
		<div>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value['url'];?>
admin/news/">NEWS　←</a></li>
			</ul>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>