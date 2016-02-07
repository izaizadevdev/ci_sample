<?php /* Smarty version 3.1.27, created on 2015-12-24 16:33:10
         compiled from "D:\projects\ci_sample\application\views\templates\common\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18864567bbbd644e1f4_60480370%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50f7a2b6a374cd8ac0f43a5698d8e33fa7f1bda' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\common\\header.tpl',
      1 => 1449828328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18864567bbbd644e1f4_60480370',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567bbbd6461c89_28123383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567bbbd6461c89_28123383')) {
function content_567bbbd6461c89_28123383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18864567bbbd644e1f4_60480370';
echo $_smarty_tpl->getSubTemplate ("common/html_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body id="jp">
	<div class="page-header">
		<div class="top_bar">
			<div class="container">
				<ul class="list-inline">
					<li class="mobile"><a href="#xxxx">Mobile Version</a></li>
					<!--	<li class="pc"><a href="#xxxx">PC Version</a></li>-->
					<li class="fb"><a href="https://www.facebook.com/monoqlo24" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/fb_btn01.png" width="25" height="24" alt="*"></a></li>
					<li class="jp"><a class="active" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/jp_btn.png" width="41" height="24" alt="*"></a></li>
					<li class="th"><a href="/th/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/th_btn.png" width="41" height="24" alt="*"></a></li>
				</ul>
				<h1>タイ・バンコクでマーケティングリサーチを含む様々な調査・ホームページ/SNS制作・システム開発全般を幅広くサポート致します。</h1>
			</div>
		</div><!-- end top_bar -->
		<div class="header">
			<div class="container">
				<div class="contact">
					<div class="contact_text">
						<img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/header_tel.png" width="249" height="31" alt="*">
						<p>月~金 / 10~19時 <span>Monoqlo Co., Ltd.</span></p>
					</div><!-- end contact_text -->
				</div><!-- end contact -->
				<div class="logo">
					<a href="/jp/"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/logo.png" width="260" height="51" alt="*"></a>
					<h2>『株式会社モノクロ』</h2>
				</div><!-- end logo -->
				<a class="btn_autoCal" href="/jp/auto-calculate.php">Auto Calculate</a>
			</div>
		</div><!-- end header -->
		<div class="main_menu">
			<div class="container">
				<ul class="list-inline">
					<li class="mn01"><a href="/jp/">Home</a></li>
					<li class="mn02"><a href="/jp/service/">Service</a></li>
					<li class="mn03"><a href="/jp/works/website.php">Works</a></li>
					<li class="mn04"><a href="/jp/faq.php">FAQ</a></li>
					<li class="mn05"><a href="/jp/about.php">About Us</a></li>
					<li class="mn06"><a href="/jp/contact.php"></a></li>
				</ul>
				<div class="menu_line"></div>
			</div>
		</div><!-- end main_menu -->
	</div><!-- end page-header -->
<?php }
}
?>