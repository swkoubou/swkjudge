<h2>Editing <span class='muted'>Submit</span></h2>
<br>

<?php echo render('submit/_form'); ?>
<p>
	<?php echo Html::anchor('submit/view/'.$submit->id, 'View'); ?> |
	<?php echo Html::anchor('submit', 'Back'); ?></p>
