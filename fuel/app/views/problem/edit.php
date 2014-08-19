<h2>Editing <span class='muted'>Problem</span></h2>
<br>

<?php echo render('problem/_form'); ?>
<p>
	<?php echo Html::anchor('problem/view/'.$problem->id, 'View'); ?> |
	<?php echo Html::anchor('problem', 'Back'); ?></p>
