<?php /* Smarty version 3.1.27, created on 2015-12-28 18:58:00
         compiled from "D:\projects\ci_sample\application\views\templates\common\html_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31104568123c8857183_17776020%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58cc62444832b545b47d8dc5e7c7d12b7ac5781a' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\common\\html_header.tpl',
      1 => 1451303875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31104568123c8857183_17776020',
  'variables' => 
  array (
    'ses_lang' => 0,
    'title' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568123c88a49a1_16952747',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568123c88a49a1_16952747')) {
function content_568123c88a49a1_16952747 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31104568123c8857183_17776020';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['ses_lang']->value;?>
" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title><?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['config']->value['site_title'];?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['keywords'];?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['description'];?>
">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href=" <?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/style.css">
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
js/validation-check.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
js/totalcost.js"><?php echo '</script'; ?>
>
	<!-- go top -->
	<?php echo '<script'; ?>
>
		//current
		$(function(){
			$('.gotop a').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 600);
				return false;
			});
			if(document.getElementById('top')){
				$('.main_menu li:eq(0) a').addClass('active');;
			}else if(document.getElementById('service')){
				$('.main_menu li:eq(1) a').addClass('active');;
			}else if(document.getElementById('work')){
				$('.main_menu li:eq(2) a').addClass('active');;
			}else if(document.getElementById('faq')){
				$('.main_menu li:eq(3) a').addClass('active');;
			}else if(document.getElementById('about')){
				$('.main_menu li:eq(4) a').addClass('active');;
			}else if(document.getElementById('contact')){
				$('.main_menu li:eq(5) a').addClass('active');;
			}
		});
	<?php echo '</script'; ?>
>
</head>
<?php }
}
?>