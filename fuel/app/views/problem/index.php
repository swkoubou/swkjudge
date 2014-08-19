<h2>Listing <span class='muted'>Problems</span></h2>
<br>
<?php if ($problems): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Subname</th>
			<th>Statement</th>
			<th>Constrains</th>
			<th>Inputtext</th>
			<th>Input</th>
			<th>Output</th>
			<th>Examples</th>
			<th>View</th>
			<th>Genre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($problems as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->subname; ?></td>
			<td><?php echo $item->statement; ?></td>
			<td><?php echo $item->constrains; ?></td>
			<td><?php echo $item->inputtext; ?></td>
			<td><?php echo $item->input; ?></td>
			<td><?php echo $item->output; ?></td>
			<td><?php echo $item->examples; ?></td>
			<td><?php echo $item->view; ?></td>
			<td><?php echo $item->genre; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('problem/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('problem/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('problem/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Problems.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('problem/create', 'Add new Problem', array('class' => 'btn btn-success')); ?>

</p>
