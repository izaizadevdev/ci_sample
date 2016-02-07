<!DOCTYPE html>
<html lang="{$ses_lang}" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>{if $title}{$title} - {/if}{$config.site_title}</title>
	<meta name="keywords" content="{$config.keywords}">
	<meta name="description" content="{$config.description}">
	<link rel="shortcut icon" href="{$config.common_url}img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href=" {$config.common_url}css/bootstrap.css">
	<link rel="stylesheet" href="{$config.common_url}css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script src="{$config.common_url}js/validation-check.js"></script>
	<script src="{$config.common_url}js/totalcost.js"></script>
	<!-- go top -->
	<script>
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
	</script>
</head>
