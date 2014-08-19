<h2>Viewing <span class='muted'>#<?php echo $contestproblem->id; ?></span></h2>

<p>
	<strong>Contestid:</strong>
	<?php echo $contestproblem->contestid; ?></p>
<p>
	<strong>Rate:</strong>
	<?php echo $contestproblem->rate; ?></p>
<p>
	<strong>Problemid:</strong>
	<?php echo $contestproblem->problemid; ?></p>
<p>
	<strong>Score:</strong>
	<?php echo $contestproblem->score; ?></p>

<?php echo Html::anchor('contestproblem/edit/'.$contestproblem->id, 'Edit'); ?> |
<?php echo Html::anchor('contestproblem', 'Back'); ?>