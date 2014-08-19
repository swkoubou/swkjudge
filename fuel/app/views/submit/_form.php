<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($submit) ? $submit->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Problemid', 'problemid', array('class'=>'control-label')); ?>

				<?php echo Form::input('problemid', Input::post('problemid', isset($submit) ? $submit->problemid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Problemid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contestid', 'contestid', array('class'=>'control-label')); ?>

				<?php echo Form::input('contestid', Input::post('contestid', isset($submit) ? $submit->contestid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contestid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Score', 'score', array('class'=>'control-label')); ?>

				<?php echo Form::input('score', Input::post('score', isset($submit) ? $submit->score : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Score')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Lang', 'lang', array('class'=>'control-label')); ?>

				<?php echo Form::input('lang', Input::post('lang', isset($submit) ? $submit->lang : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Lang')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Time', 'time', array('class'=>'control-label')); ?>

				<?php echo Form::input('time', Input::post('time', isset($submit) ? $submit->time : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Time')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Result', 'result', array('class'=>'control-label')); ?>

				<?php echo Form::input('result', Input::post('result', isset($submit) ? $submit->result : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Result')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('View', 'view', array('class'=>'control-label')); ?>

				<?php echo Form::input('view', Input::post('view', isset($submit) ? $submit->view : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'View')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>