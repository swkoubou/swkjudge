<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($problem) ? $problem->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Subname', 'subname', array('class'=>'control-label')); ?>

				<?php echo Form::input('subname', Input::post('subname', isset($problem) ? $problem->subname : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Subname')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Statement', 'statement', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('statement', Input::post('statement', isset($problem) ? $problem->statement : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Statement')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Constrains', 'constrains', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('constrains', Input::post('constrains', isset($problem) ? $problem->constrains : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Constrains')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Inputtext', 'inputtext', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('inputtext', Input::post('inputtext', isset($problem) ? $problem->inputtext : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Inputtext')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Input', 'input', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('input', Input::post('input', isset($problem) ? $problem->input : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Input')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Output', 'output', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('output', Input::post('output', isset($problem) ? $problem->output : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Output')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Examples', 'examples', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('examples', Input::post('examples', isset($problem) ? $problem->examples : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Examples')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('View', 'view', array('class'=>'control-label')); ?>

				<?php echo Form::input('view', Input::post('view', isset($problem) ? $problem->view : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'View')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Genre', 'genre', array('class'=>'control-label')); ?>

				<?php echo Form::input('genre', Input::post('genre', isset($problem) ? $problem->genre : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Genre')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>