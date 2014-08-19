<h2>Viewing <span class='muted'>#<?php echo $contestmaster->id; ?></span></h2>

<p>
	<strong>Contestid:</strong>
	<?php echo $contestmaster->contestid; ?></p>
<p>
	<strong>Username:</strong>
	<?php echo $contestmaster->username; ?></p>

<?php echo Html::anchor('contestmaster/edit/'.$contestmaster->id, 'Edit'); ?> |
<?php echo Html::anchor('contestmaster', 'Back'); ?>