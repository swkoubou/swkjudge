<h2>Editing <span class='muted'>Contestmaster</span></h2>
<br>

<?php echo render('contestmaster/_form'); ?>
<p>
	<?php echo Html::anchor('contestmaster/view/'.$contestmaster->id, 'View'); ?> |
	<?php echo Html::anchor('contestmaster', 'Back'); ?></p>
