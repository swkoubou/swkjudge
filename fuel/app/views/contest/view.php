<h2>Viewing <span class='muted'>#<?php echo $contest->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $contest->name; ?></p>
<p>
	<strong>Start:</strong>
	<?php echo $contest->start; ?></p>
<p>
	<strong>End:</strong>
	<?php echo $contest->end; ?></p>
<p>
	<strong>Notice:</strong>
	<?php echo $contest->notice; ?></p>
<p>
	<strong>Type:</strong>
	<?php echo $contest->type; ?></p>

<?php echo Html::anchor('contest/edit/'.$contest->id, 'Edit'); ?> |
<?php echo Html::anchor('contest', 'Back'); ?>