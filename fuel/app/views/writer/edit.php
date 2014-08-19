<h2>Editing <span class='muted'>Writer</span></h2>
<br>

<?php echo render('writer/_form'); ?>
<p>
	<?php echo Html::anchor('writer/view/'.$writer->id, 'View'); ?> |
	<?php echo Html::anchor('writer', 'Back'); ?></p>
