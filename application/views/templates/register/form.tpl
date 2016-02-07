{include file="common/header.tpl" title="Register user form"}

<div class="container">
	<div class="content">
		<style>
		{literal}
		.error p {color:red !important;}
		{/literal}
		</style>
		{$errors}
		<form action="{$config.url}register/" method="post">
			<input type="hidden" name="mode" value="confirm">
			<table>
				<tr>
					<th>{required}Name</th>
					<td>
						<input type="text" name="name" value="{set_value name="name"}">
					</td>
				</tr>
				<tr>
					<th>{required}E-mail address</th>
					<td>
						<input type="text" name="email" value="{set_value name="email"}">
					</td>
				</tr>
				<tr>
					<th>{required}Password</th>
					<td>
						<input type="password" name="password" value="{set_value name="password"}">
					</td>
				</tr>
				<tr>
					<th>{required}Confirm password</th>
					<td>
						<input type="password" name="passconf" value="{set_value name="passconf"}">
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div><!-- /.content -->
</div><!-- /.container -->
	
{include file="common/footer.tpl"}