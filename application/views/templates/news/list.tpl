{include file="common/header.tpl" title="news list"}

<div class="container">
	<div class="content">
		<h2>NEWS LIST</h2>
		<div>
			<table>
				<thead>
					<tr>
						<th>TITLE</th>
						<th>BODY</th>
						<th>REGISTERED</th>
					</tr>
				</thead>
				<tbody>
					{if $articles}
					{foreach from=$articles name=article item=article}
					<tr>
						<td>{$article.title}</td>
						<td>{$article.body|trim:30}</td>
						<td>{$article.registered_datetime}</td>
					</tr>
					{/foreach}
					{else}
					<tr>
						<td colspan="3">NOT REGISTERED</td>
					</tr>
					{/if}
				</tbody>
			</table>
		</div>
	</div>
</div>

{include file="common/footer.tpl"}