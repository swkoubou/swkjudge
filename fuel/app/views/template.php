<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?php echo Asset::js('jquery.js'); ?>
		<?php echo Asset::js('bootstrap.js'); ?>
		<?php echo Asset::css('bootstrap.css'); ?>
		<script>
			$(function(){
				textClock.startTick("nowtime", 100);
			});
		</script>
	</head>
	<body>
		<?php include APPPATH.'/views/includes/header.php'; ?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="well">
						<?php echo $content; ?>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>

