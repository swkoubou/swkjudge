<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Contestid', 'contestid', array('class'=>'control-label')); ?>

				<?php echo Form::input('contestid', Input::post('contestid', isset($contestproblem) ? $contestproblem->contestid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contestid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Rate', 'rate', array('class'=>'control-label')); ?>

				<?php echo Form::input('rate', Input::post('rate', isset($contestproblem) ? $contestproblem->rate : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Rate')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Problemid', 'problemid', array('class'=>'control-label')); ?>

				<?php echo Form::input('problemid', Input::post('problemid', isset($contestproblem) ? $contestproblem->problemid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Problemid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Score', 'score', array('class'=>'control-label')); ?>

				<?php echo Form::input('score', Input::post('score', isset($contestproblem) ? $contestproblem->score : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Score')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>