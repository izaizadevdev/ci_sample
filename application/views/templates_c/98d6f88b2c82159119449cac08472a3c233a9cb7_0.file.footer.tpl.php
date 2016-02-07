<?php /* Smarty version 3.1.27, created on 2015-12-24 16:33:10
         compiled from "D:\projects\ci_sample\application\views\templates\common\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12206567bbbd649dda5_33291244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d6f88b2c82159119449cac08472a3c233a9cb7' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\common\\footer.tpl',
      1 => 1449828177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12206567bbbd649dda5_33291244',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567bbbd64a6943_42696437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567bbbd64a6943_42696437')) {
function content_567bbbd64a6943_42696437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12206567bbbd649dda5_33291244';
?>
	<div class="gotop container">
		<a href="">GO TOP PAGE</a>
	</div>

	<div class="footer">
		<div class="container">
			<!--<div class="gotop"><a href="#xxxx">^ GO TO TOP</a></div>-->
			<div class="sitemap">
				<ul class="list-inline">
					<li><a href="/jp/">:: Home</a></li>
					<li><a href="/jp/service/">:: Service</a></li>
					<li><a href="/jp/works/website.php">:: Works</a></li>
					<li><a href="/jp/faq.php">:: FAQ</a></li>
					<li><a href="/jp/about.php">:: About Us</a></li>
					<li><a href="/jp/contact.php">:: Contact Us</a></li>
				</ul>
			</div><!-- end sitemap -->
			<div class="address">
				<a href="/jp/"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['common_url'];?>
img/logo.png" width="260" height="51" alt="*"></a>
				<div class="address_text">
					<p class="company_neme">Monoqlo Co., Ltd.</p>
					<p>
						23/82 (21th Fl.) Sorachai Building, Soi Sukhumvit 63, <br>
						Sukhumvit Road, North Khlongtan, Watthana, Bangkok 10110
					</p>
				</div><!-- end address_text -->
				<a class="tel_bn" href="tel:+6627143461">027143461</a>
			</div><!-- end address -->
		</div>
		<div class="copy">
			<div class="container">
				<ul class="list-inline">
					<li><a class="copy_tel" href="tel:+6627143461">tel</a></li>
					<li><a class="copy_fb" href="https://www.facebook.com/monoqlo24" target="_blank">facebook</a></li>
					<li><a class="copy_contact" href="/jp/contact.php">contact</a></li>
				</ul>
				<p>Copyright &copy; 2015 Monoqlo Co., Ltd. All Rights Reserved.</p>
			</div>
		</div><!-- end coppy -->
	</div><!-- end footer -->
</body>
</html><?php }
}
?>