{include file="common/header.tpl" title="Login form"}

<div class="container">
	<div class="content">
		<style>
		{literal}
		.error p {color:red !important;}
		{/literal}
		</style>
		{if $errors}{errors}{/if}
		<form action="{$config.url}login/" method="post">
			<input type="hidden" name="mode" value="submit">
			<table>
				<tr>
					<th>{required}E-mail address</th>
					<td><input type="text" name="email" value="{set_value name="email"}"></td>
				</tr>
				<tr>
					<th>{required}Password</th>
					<td><input type="password" name="password" value="{set_value name="password"}"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</div>


{include file="common/footer.tpl"}