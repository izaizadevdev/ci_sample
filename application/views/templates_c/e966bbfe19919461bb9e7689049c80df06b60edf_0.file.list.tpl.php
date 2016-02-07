<?php /* Smarty version 3.1.27, created on 2015-12-24 16:37:11
         compiled from "D:\projects\ci_sample\application\views\templates\news\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20700567bbcc7bbde30_91613479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e966bbfe19919461bb9e7689049c80df06b60edf' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\news\\list.tpl',
      1 => 1450855117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20700567bbcc7bbde30_91613479',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567bbcc7c22fe6_88509202',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567bbcc7c22fe6_88509202')) {
function content_567bbcc7c22fe6_88509202 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20700567bbcc7bbde30_91613479';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"news list"), 0);
?>


<div class="container">
	<div class="content">
		<h2>NEWS LIST</h2>
		<div>
			<table>
				<thead>
					<tr>
						<th>TITLE</th>
						<th>BODY</th>
						<th>REGISTERED</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$foreach_article_Sav = $_smarty_tpl->tpl_vars['article'];
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</td>
						<td><?php echo trim($_smarty_tpl->tpl_vars['article']->value['body'],30);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['article']->value['registered_datetime'];?>
</td>
					</tr>
					<?php
$_smarty_tpl->tpl_vars['article'] = $foreach_article_Sav;
}
?>
					<?php } else { ?>
					<tr>
						<td colspan="3">NOT REGISTERED</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>