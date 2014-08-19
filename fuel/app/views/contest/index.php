<h2>Listing <span class='muted'>Contests</span></h2>
<br>
<?php if ($contests): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Start</th>
			<th>End</th>
			<th>Notice</th>
			<th>Type</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($contests as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->start; ?></td>
			<td><?php echo $item->end; ?></td>
			<td><?php echo $item->notice; ?></td>
			<td><?php echo $item->type; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('contest/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contest/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contest/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Contests.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('contest/create', 'Add new Contest', array('class' => 'btn btn-success')); ?>

</p>
