{include file="common/header.tpl" title="Register user form"}

<div class="container">
	<div class="content">
		<h2>login success</h2>
		<div>
			<dl>
				<dt>NAME</dt>
				<dd>{$user.username}</dd>
				<dt>E-MAIL ADDRESS</dt>
				<dd>{$user.email}</dd>
			</dl>
		</div>
	</div>
</div><!-- /.container -->

{include file="common/footer.tpl"}