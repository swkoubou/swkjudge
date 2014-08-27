<h2>Editing <span class='muted'>Contestuser</span></h2>
<br>

<?php echo render('contestuser/_form'); ?>
<p>
	<?php echo Html::anchor('contestuser/view/'.$contestuser->id, 'View'); ?> |
	<?php echo Html::anchor('contestuser', 'Back'); ?></p>
