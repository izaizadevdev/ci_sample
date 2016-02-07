<?php /* Smarty version 3.1.27, created on 2015-12-25 18:02:07
         compiled from "D:\projects\ci_sample\application\views\templates\top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18331567d222fd31788_31446678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b10e6f026208d71a6a775f78bcbb6dcafdc397' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\top.tpl',
      1 => 1451041325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18331567d222fd31788_31446678',
  'variables' => 
  array (
    'config' => 0,
    'lang_data' => 0,
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567d222fdf7168_83553211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567d222fdf7168_83553211')) {
function content_567d222fdf7168_83553211 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_lang')) require_once 'D:\\projects\\ci_sample\\application\\third_party\\smarty\\libraries\\plugins\\modifier.lang.php';

$_smarty_tpl->properties['nocache_hash'] = '18331567d222fd31788_31446678';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/slicebox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/slicebox-slider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/slicebox-custom.css" />
	<div id="slider" class="container">
		<div class="wrapper">
			<ul id="sb-slider" class="sb-slider">
				<li><a href="/jp/service/research"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/slider/01.jpg" alt="image1"/></a></li>
				<li><a href="/jp/service/web"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/slider/02.jpg" alt="image2"/></a></li>
				<li><a href="/jp/service/system"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/slider/03.jpg" alt="image1"/></a></li>
				<li><a href="/jp/about.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/slider/04.jpg" alt="image1"/></a></li>
			</ul>
			<div id="shadow" class="shadow"></div>
			<!--div id="nav-arrows" class="nav-arrows">
				<a href="#">Next</a>
				<a href="#">Previous</a>
			</div-->
		</div><!-- /wrapper -->
	</div><!-- #/slider -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
js/modernizr.custom.46884.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
js/jquery.slicebox.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
css/slide-banner.css">
	<div class="container">
		<div id="slide_banner" class="scroll-img">
			<ul>
				<li><a href="/jp/service/research/marketing.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/marketing_side_bn01_jp.jpg" alt="認知度調査"></a></li>
				<li><a href="/jp/service/research/mystery_shopper.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/marketing_side_bn02_jp.jpg" alt="ミステリーショッパー"></a></li>
				<li><a href="/jp/service/research/demand.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/marketing_side_bn03_jp.jpg" alt="顧客・従業員満足度調査"></a></li>
				<li><a href="/jp/service/research/consumer.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/marketing_side_bn04_jp.jpg" alt="消費者ニーズ調査"></a></li>
				<li><a href="/jp/service/research/product.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/marketing_side_bn05_jp.jpg" alt="新製品開発調査"></a></li>
				<li><a href="/jp/service/web/design.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn01_jp.png" alt="ホームページ新規制作"></a></li>
				<li><a href="/jp/service/web/renewal.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn02_jp.png" alt="ホームページリニューアル"></a></li>
				<li><a href="/jp/service/web/promotion.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn03_jp.png" alt="Webプロモーション"></a></li>
				<li><a href="/jp/service/web/maintenance.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn04_jp.png" alt="ホームページ運用 / 更新"></a></li>
				<li><a href="/jp/service/web/fb_design.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn05_jp.png" alt="Facebookページ制作"></a></li>
				<li><a href="/jp/service/web/fb_posting.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn06_jp.png" alt="Facebook運用"></a></li>
				<li><a href="/jp/service/web/publishing.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/web_side_bn07_jp.png" alt="印刷物・SPツール制作"></a></li>
				<li><a href="/jp/service/web_system/system_corporate.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/system_side_bn01_jp.jpg"width="200" height="100" alt="企業 / 店舗サイト関連"></a></li>
				<li><a href="/jp/service/web_system/system_e-commerce.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/system_side_bn02_jp.jpg" width="200" height="100" alt="販売サイト関連"></a></li>
				<li><a href="/jp/service/web_system/system_other.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/sidebar/system_side_bn03_jp.jpg" width="200" height="100" alt="その他"></a></li>
			</ul>
		</div>
		<div id="slide_banner-btn">
			<div id="slide_banner-backward"><span class="glyphicon glyphicon-menu-left"></span></div>
			<div id="slide_banner-forward"><span class="glyphicon glyphicon-menu-right"></span></div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
js/jquery.scrollbox.min.js"><?php echo '</script'; ?>
>

	<div id="top" class="container">
		<div class="content">
			<div class="top_bn">
				<ul class="list-inline">
					<li class="tbn01"><a href="/jp/service/">弊社サービス</a></li>
					<li class="tbn02"><a href="/jp/works/website.php">実績紹介</a></li>
					<li class="tbn03"><a href="/jp/contact.php">お問い合わせ</a></li>
				</ul>
			</div><!-- end top_bn -->
			<div class="greeting">
				<!-- <h4>ご挨拶</h4> -->
				<h4><?php echo smarty_modifier_lang('greeting',$_smarty_tpl->tpl_vars['lang_data']->value);?>
</h4>
				<div class="greeting_text">
					<p>株式会社MONOQLO（モノクロ）のホームページへアクセスいただき、誠にありがとうございます。弊社は2013年11月にASEANの中心地、バンコクにて設立したBOI法人企業です。 現地日系 / ローカル企業様向けに市場調査、IT事業サービスを主軸に活動しております。昨今ネット検索によりタイムリーな情報が手に入る時代となりましたが、真に活きた情報を得るにはやはり現地の生の声が一番です。進出を検討中、あるいはすでに進出されている企業･店舗様に高品質で有益な情報を提供し、ビジネス成功に貢献することを理念に活動しております。</p>
					<a href="/jp/contact.php"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/contact_btn02.png" alt="Contact Monoqlo"></a>
				</div><!-- end greeting_text -->
			</div><!--  end greeting-->

			<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
			<div class="news">
				<h4>What’s new!</h4>
				<div class="news_content">
					<div class="news_button">
						<ul class="list-inline nav nav-tabs">
							<li class="nw01 active"><a data-toggle="tab" href="#news-all">All</a></li>
							<li class="nw02"><a data-toggle="tab" href="#news-only">News</a></li>
							<li class="nw03"><a data-toggle="tab" href="#news-it">IT</a></li>
							<li class="nw04"><a data-toggle="tab" href="#news-research">Research</a></li>
						</ul>
					</div><!-- end news_button -->
					<div class="tab-content news_text">
						<ul id="news-all" class="tab-pane fade in active">
							<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?>
							<li>
								<p class="news_date"><?php echo $_smarty_tpl->tpl_vars['n']->value['datetime'];?>
</p>
								<p class="news_type"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/news_type02.jpg"></p>
								<p class="news_detail">
									<b><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</b><br />
									<?php echo $_smarty_tpl->tpl_vars['n']->value['body'];?>

								</p>
							</li>
							<?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?>
						</ul><!-- #/news-research -->
					</div><!-- end news_text -->
				</div><!-- end news_content -->
			</div><!-- end news -->
			<?php }?>
		</div><!-- end content -->
	</div>
		
	<?php echo '<script'; ?>
>
		$(function () {
			var Page = (function() {
				var $navArrows = $( '#nav-arrows' ).hide(),
					$shadow = $( '#shadow' ).hide(),
					slicebox = $( '#sb-slider' ).slicebox( {
						onReady : function() {
							$navArrows.show();
							$shadow.show();
						},
						orientation : 'h',
						cuboidsCount : 4
					} ),

					init = function() {
						initEvents();
					},
					initEvents = function() {
						slicebox.play();
						// add navigation events
						/*$navArrows.children( ':first' ).on( 'click', function() {
							slicebox.next();
							return false;
						} );

						$navArrows.children( ':last' ).on( 'click', function() {
							slicebox.previous();
							return false;
						} );*/
					};
					return { init : init };
			})();
			Page.init();
				
			$('#slide_banner').scrollbox({
				direction: 'h',
				distance: 240,
				speed: 100
			});
			
			$('#slide_banner-backward span').click(function () {
				$('#slide_banner').trigger('backward');
			});
			
			$('#slide_banner-forward span').click(function () {
				$('#slide_banner').trigger('forward');
			});
		});
	<?php echo '</script'; ?>
>
	
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>