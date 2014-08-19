<h2>Viewing <span class='muted'>#<?php echo $genre->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $genre->name; ?></p>

<?php echo Html::anchor('genre/edit/'.$genre->id, 'Edit'); ?> |
<?php echo Html::anchor('genre', 'Back'); ?>