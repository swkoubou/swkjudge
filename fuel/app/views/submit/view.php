<h2>Viewing <span class='muted'>#<?php echo $submit->id; ?></span></h2>

<p>
	<strong>Username:</strong>
	<?php echo $submit->username; ?></p>
<p>
	<strong>Problemid:</strong>
	<?php echo $submit->problemid; ?></p>
<p>
	<strong>Contestid:</strong>
	<?php echo $submit->contestid; ?></p>
<p>
	<strong>Score:</strong>
	<?php echo $submit->score; ?></p>
<p>
	<strong>Lang:</strong>
	<?php echo $submit->lang; ?></p>
<p>
	<strong>Time:</strong>
	<?php echo $submit->time; ?></p>
<p>
	<strong>Result:</strong>
	<?php echo $submit->result; ?></p>
<p>
	<strong>View:</strong>
	<?php echo $submit->view; ?></p>

<?php echo Html::anchor('submit/edit/'.$submit->id, 'Edit'); ?> |
<?php echo Html::anchor('submit', 'Back'); ?>