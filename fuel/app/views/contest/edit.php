<h2>Editing <span class='muted'>Contest</span></h2>
<br>

<?php echo render('contest/_form'); ?>
<p>
	<?php echo Html::anchor('contest/view/'.$contest->id, 'View'); ?> |
	<?php echo Html::anchor('contest', 'Back'); ?></p>
