<h2>Viewing <span class='muted'>#<?php echo $tester->id; ?></span></h2>

<p>
	<strong>Problemid:</strong>
	<?php echo $tester->problemid; ?></p>
<p>
	<strong>Username:</strong>
	<?php echo $tester->username; ?></p>

<?php echo Html::anchor('tester/edit/'.$tester->id, 'Edit'); ?> |
<?php echo Html::anchor('tester', 'Back'); ?>