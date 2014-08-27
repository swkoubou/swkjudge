<h2><?php echo $username; ?>のステータス</h2>
<hr>
<table class="table table-striped table-bordered table-condensed">
	<thead>
		<tr>
			<th>Level</th>
			<th>EXP</th>
			<th>解いた問題数</th>
			<th>コンテスト参加回数</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $level; ?></td>
			<td><?php echo $exp; ?></td>
			<td><?php echo $solvecount; ?></td>
			<td><?php echo $contestcount; ?></td>
		</tr>
	</tbody>
</table>