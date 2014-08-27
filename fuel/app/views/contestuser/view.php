<h2>Viewing <span class='muted'>#<?php echo $contestuser->id; ?></span></h2>

<p>
	<strong>Contestid:</strong>
	<?php echo $contestuser->contestid; ?></p>
<p>
	<strong>Username:</strong>
	<?php echo $contestuser->username; ?></p>

<?php echo Html::anchor('contestuser/edit/'.$contestuser->id, 'Edit'); ?> |
<?php echo Html::anchor('contestuser', 'Back'); ?>