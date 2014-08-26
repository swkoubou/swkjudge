<div class="col-sm-12">
	<h1>ログイン</h1>
	<hr>
	<?php echo Form::open(array('class'=>'form-horizontal')); ?>
	<fieldset>
		<?php if(isset($error)):?>
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			ユーザIDかパスワードが違います
		</div> 
		<?php endif;?>
		<?php if(isset($success)):?>
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $success; ?>
		</div> 
		<?php endif;?>
		<div class="form-group">
			<?php echo Form::label('ユーザID', 'username', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-4">
				<?php echo Form::input('username','', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="form-group">
			<?php echo Form::label('パスワード', 'password', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-4">
				<?php echo Form::password('password','', array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="form-actions">
			<div class="col-sm-offset-1 col-sm-4">
				<?php echo Form::submit('submit', 'ログイン', array('class' => 'btn btn-primary')); ?>&nbsp;&nbsp;&nbsp;
				<?php echo Html::anchor('member/adduser', '新規登録', array('class' => 'btn btn-info')); ?>
			</div>
		</div>
	</fieldset>
	<?php echo Form::close(); ?>

</div>