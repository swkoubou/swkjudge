<h2>Listing <span class='muted'>Submits</span></h2>
<br>
<?php if ($submits): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Problemid</th>
			<th>Contestid</th>
			<th>Score</th>
			<th>Lang</th>
			<th>Time</th>
			<th>Result</th>
			<th>View</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($submits as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<td><?php echo $item->problemid; ?></td>
			<td><?php echo $item->contestid; ?></td>
			<td><?php echo $item->score; ?></td>
			<td><?php echo $item->lang; ?></td>
			<td><?php echo $item->time; ?></td>
			<td><?php echo $item->result; ?></td>
			<td><?php echo $item->view; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('submit/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('submit/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('submit/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Submits.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('submit/create', 'Add new Submit', array('class' => 'btn btn-success')); ?>

</p>
