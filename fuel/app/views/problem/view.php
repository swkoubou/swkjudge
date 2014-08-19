<h2>Viewing <span class='muted'>#<?php echo $problem->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $problem->name; ?></p>
<p>
	<strong>Subname:</strong>
	<?php echo $problem->subname; ?></p>
<p>
	<strong>Statement:</strong>
	<?php echo $problem->statement; ?></p>
<p>
	<strong>Constrains:</strong>
	<?php echo $problem->constrains; ?></p>
<p>
	<strong>Inputtext:</strong>
	<?php echo $problem->inputtext; ?></p>
<p>
	<strong>Input:</strong>
	<?php echo $problem->input; ?></p>
<p>
	<strong>Output:</strong>
	<?php echo $problem->output; ?></p>
<p>
	<strong>Examples:</strong>
	<?php echo $problem->examples; ?></p>
<p>
	<strong>View:</strong>
	<?php echo $problem->view; ?></p>
<p>
	<strong>Genre:</strong>
	<?php echo $problem->genre; ?></p>

<?php echo Html::anchor('problem/edit/'.$problem->id, 'Edit'); ?> |
<?php echo Html::anchor('problem', 'Back'); ?>