<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($contest) ? $contest->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Start', 'start', array('class'=>'control-label')); ?>

				<?php echo Form::input('start', Input::post('start', isset($contest) ? $contest->start : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Start')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('End', 'end', array('class'=>'control-label')); ?>

				<?php echo Form::input('end', Input::post('end', isset($contest) ? $contest->end : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'End')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Notice', 'notice', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('notice', Input::post('notice', isset($contest) ? $contest->notice : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Notice')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Type', 'type', array('class'=>'control-label')); ?>

				<?php echo Form::input('type', Input::post('type', isset($contest) ? $contest->type : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Type')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>