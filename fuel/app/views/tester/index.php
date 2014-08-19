<h2>Listing <span class='muted'>Testers</span></h2>
<br>
<?php if ($testers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Problemid</th>
			<th>Username</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($testers as $item): ?>		<tr>

			<td><?php echo $item->problemid; ?></td>
			<td><?php echo $item->username; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('tester/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('tester/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('tester/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Testers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('tester/create', 'Add new Tester', array('class' => 'btn btn-success')); ?>

</p>
