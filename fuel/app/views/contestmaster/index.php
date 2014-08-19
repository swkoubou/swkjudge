<h2>Listing <span class='muted'>Contestmasters</span></h2>
<br>
<?php if ($contestmasters): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Contestid</th>
			<th>Username</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($contestmasters as $item): ?>		<tr>

			<td><?php echo $item->contestid; ?></td>
			<td><?php echo $item->username; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('contestmaster/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contestmaster/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('contestmaster/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Contestmasters.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('contestmaster/create', 'Add new Contestmaster', array('class' => 'btn btn-success')); ?>

</p>
