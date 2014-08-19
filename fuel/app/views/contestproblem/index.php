<h2>Listing <span class='muted'>Contestproblems</span></h2>
<br>
<?php if ($contestproblems): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Contestid</th>
			<th>Rate</th>
			<th>Problemid</th>
			<th>Score</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($contestproblems as $item): ?>		<tr>

			<td><?php echo $item->contestid; ?></td>
			<td><?php echo $item->rate; ?></td>
			<td><?php echo $item->problemid; ?></td>
			<td><?php echo $item->score; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('contestproblem/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contestproblem/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contestproblem/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Contestproblems.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('contestproblem/create', 'Add new Contestproblem', array('class' => 'btn btn-success')); ?>

</p>
