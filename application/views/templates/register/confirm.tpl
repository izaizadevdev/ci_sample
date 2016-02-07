{include file="common/header.tpl" title="Register user confirm"}

<div class="container">
	<div class="content">
		<form action="{$config.url}register/" method="post">
			<input type="hidden" name="mode" value="submit">
			{foreach from=$hidden_list key="key" item="item"}
			<input type="hidden" name="{$key}" value="{$item|escape}">
			{/foreach}
			
			<table>
				<tr>
					<th>Name</th>
					<td>{$hidden_list.name|escape}</td>
				</tr>
				<tr>
					<th>Password</th>
					<td>{$hidden_list.password|escape|password}</td>
				</tr>
				<tr>
					<th>Email address</th>
					<td>{$hidden_list.email|escape}</td>
				</tr>
				<tr>
					<td><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</div>
</div>

{include file="common/footer.tpl"}