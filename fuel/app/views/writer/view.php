<h2>Viewing <span class='muted'>#<?php echo $writer->id; ?></span></h2>

<p>
	<strong>Problemid:</strong>
	<?php echo $writer->problemid; ?></p>
<p>
	<strong>Username:</strong>
	<?php echo $writer->username; ?></p>

<?php echo Html::anchor('writer/edit/'.$writer->id, 'Edit'); ?> |
<?php echo Html::anchor('writer', 'Back'); ?>