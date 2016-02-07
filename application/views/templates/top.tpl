{include file="common/header.tpl"}

	<link rel="stylesheet" type="text/css" href="{$config.common_url}css/slicebox.css" />
	<link rel="stylesheet" type="text/css" href="{$config.common_url}css/slicebox-slider.css" />
	<link rel="stylesheet" type="text/css" href="{$config.common_url}css/slicebox-custom.css" />
	<div id="slider" class="container">
		<div class="wrapper">
			<ul id="sb-slider" class="sb-slider">
				<li><a href="/jp/service/research"><img src="{$config.common_url}img/slider/01.jpg" alt="image1"/></a></li>
				<li><a href="/jp/service/web"><img src="{$config.common_url}img/slider/02.jpg" alt="image2"/></a></li>
				<li><a href="/jp/service/system"><img src="{$config.common_url}img/slider/03.jpg" alt="image1"/></a></li>
				<li><a href="/jp/about.php"><img src="{$config.common_url}img/slider/04.jpg" alt="image1"/></a></li>
			</ul>
			<div id="shadow" class="shadow"></div>
			<!--div id="nav-arrows" class="nav-arrows">
				<a href="#">Next</a>
				<a href="#">Previous</a>
			</div-->
		</div><!-- /wrapper -->
	</div><!-- #/slider -->
	<script type="text/javascript" src="{$config.common_url}js/modernizr.custom.46884.js"></script>
	<script type="text/javascript" src="{$config.common_url}js/jquery.slicebox.js"></script>
	<link rel="stylesheet" href="{$config.common_url}css/slide-banner.css">
	<div class="container">
		<div id="slide_banner" class="scroll-img">
			<ul>
				<li><a href="/jp/service/research/marketing.php"><img src="{$config.common_url}img/sidebar/marketing_side_bn01_jp.jpg" alt="認知度調査"></a></li>
				<li><a href="/jp/service/research/mystery_shopper.php"><img src="{$config.common_url}img/sidebar/marketing_side_bn02_jp.jpg" alt="ミステリーショッパー"></a></li>
				<li><a href="/jp/service/research/demand.php"><img src="{$config.common_url}img/sidebar/marketing_side_bn03_jp.jpg" alt="顧客・従業員満足度調査"></a></li>
				<li><a href="/jp/service/research/consumer.php"><img src="{$config.common_url}img/sidebar/marketing_side_bn04_jp.jpg" alt="消費者ニーズ調査"></a></li>
				<li><a href="/jp/service/research/product.php"><img src="{$config.common_url}img/sidebar/marketing_side_bn05_jp.jpg" alt="新製品開発調査"></a></li>
				<li><a href="/jp/service/web/design.php"><img src="{$config.common_url}img/sidebar/web_side_bn01_jp.png" alt="ホームページ新規制作"></a></li>
				<li><a href="/jp/service/web/renewal.php"><img src="{$config.common_url}img/sidebar/web_side_bn02_jp.png" alt="ホームページリニューアル"></a></li>
				<li><a href="/jp/service/web/promotion.php"><img src="{$config.common_url}img/sidebar/web_side_bn03_jp.png" alt="Webプロモーション"></a></li>
				<li><a href="/jp/service/web/maintenance.php"><img src="{$config.common_url}img/sidebar/web_side_bn04_jp.png" alt="ホームページ運用 / 更新"></a></li>
				<li><a href="/jp/service/web/fb_design.php"><img src="{$config.common_url}img/sidebar/web_side_bn05_jp.png" alt="Facebookページ制作"></a></li>
				<li><a href="/jp/service/web/fb_posting.php"><img src="{$config.common_url}img/sidebar/web_side_bn06_jp.png" alt="Facebook運用"></a></li>
				<li><a href="/jp/service/web/publishing.php"><img src="{$config.common_url}img/sidebar/web_side_bn07_jp.png" alt="印刷物・SPツール制作"></a></li>
				<li><a href="/jp/service/web_system/system_corporate.php"><img src="{$config.common_url}img/sidebar/system_side_bn01_jp.jpg"width="200" height="100" alt="企業 / 店舗サイト関連"></a></li>
				<li><a href="/jp/service/web_system/system_e-commerce.php"><img src="{$config.common_url}img/sidebar/system_side_bn02_jp.jpg" width="200" height="100" alt="販売サイト関連"></a></li>
				<li><a href="/jp/service/web_system/system_other.php"><img src="{$config.common_url}img/sidebar/system_side_bn03_jp.jpg" width="200" height="100" alt="その他"></a></li>
			</ul>
		</div>
		<div id="slide_banner-btn">
			<div id="slide_banner-backward"><span class="glyphicon glyphicon-menu-left"></span></div>
			<div id="slide_banner-forward"><span class="glyphicon glyphicon-menu-right"></span></div>
		</div>
	</div>
	<script src="{$config.common_url}js/jquery.scrollbox.min.js"></script>

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
				<h4>{'greeting'|lang:$lang_data}</h4>
				<div class="greeting_text">
					<p>株式会社MONOQLO（モノクロ）のホームページへアクセスいただき、誠にありがとうございます。弊社は2013年11月にASEANの中心地、バンコクにて設立したBOI法人企業です。 現地日系 / ローカル企業様向けに市場調査、IT事業サービスを主軸に活動しております。昨今ネット検索によりタイムリーな情報が手に入る時代となりましたが、真に活きた情報を得るにはやはり現地の生の声が一番です。進出を検討中、あるいはすでに進出されている企業･店舗様に高品質で有益な情報を提供し、ビジネス成功に貢献することを理念に活動しております。</p>
					<a href="/jp/contact.php"><img src="{$config.common_url}img/contact_btn02.png" alt="Contact Monoqlo"></a>
				</div><!-- end greeting_text -->
			</div><!--  end greeting-->

			{if $news}
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
							{foreach from=$news item=n}
							<li>
								<p class="news_date">{$n.datetime}</p>
								<p class="news_type"><img src="{$config.common_url}img/news_type02.jpg"></p>
								<p class="news_detail">
									<b>{$n.title}</b><br />
									{$n.body}
								</p>
							</li>
							{/foreach}
						</ul><!-- #/news-research -->
					</div><!-- end news_text -->
				</div><!-- end news_content -->
			</div><!-- end news -->
			{/if}
		</div><!-- end content -->
	</div>
		
	<script>
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
	</script>
	
{include file="common/footer.tpl"}
