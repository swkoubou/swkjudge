<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Contestid', 'contestid', array('class'=>'control-label')); ?>

				<?php echo Form::input('contestid', Input::post('contestid', isset($contestuser) ? $contestuser->contestid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contestid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($contestuser) ? $contestuser->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>