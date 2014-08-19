<h2>Editing <span class='muted'>Tester</span></h2>
<br>

<?php echo render('tester/_form'); ?>
<p>
	<?php echo Html::anchor('tester/view/'.$tester->id, 'View'); ?> |
	<?php echo Html::anchor('tester', 'Back'); ?></p>
