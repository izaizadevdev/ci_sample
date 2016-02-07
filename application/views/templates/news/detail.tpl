{include file="common/header.tpl" title="`$article.title`"}

<div class="container">
	<div class="content">
		<h2>NEWS : {$article.title}</h2>
		<div>
			<table>
				<tbody>
					<tr>
						<th>TITLE</th>
						<td>{$article.title}</td>
					</tr>
					<tr>
						<th>BODY</th>
						<td>{$article.body}</td>
					</tr>
					<tr>
						<th>REGISTERED</th>
						<td>{$article.registered_datetime}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

{include file="common/footer.tpl"}