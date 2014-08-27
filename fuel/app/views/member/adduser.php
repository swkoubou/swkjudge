<h1>ユーザ追加</h1>
<hr>
<?php echo Form::open(array('class'=>'form-horizontal')); ?>
<fieldset>
	<?php if(isset($error)):?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo $error; ?>
	</div> 
	<?php endif;?>
	<div class="form-group">
		<?php echo Form::label('ユーザID', 'username', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo Form::input('username','', array('class' => 'form-control')); ?>
		</div>
		<span class="help-block">ユーザIDを4～16文字以内で入力して下さい。</span>
	</div>
	<div class="form-group">
		<?php echo Form::label('パスワード', 'password', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo Form::password('password','', array('class' => 'form-control')); ?>
		</div>
		<span class="help-block">パスワードを8～32文字以内で入力して下さい。</span>
	</div>
	<div class="form-group">
		<?php echo Form::label('パスワード(確認)', 'password2', array('class' => 'col-sm-2 control-label')); ?>
		<div class="col-sm-4">
			<?php echo Form::password('password2','', array('class' => 'form-control')); ?>
		</div>
		<span class="help-block">もう一度同じパスワードを入力して下さい。</span>
	</div>
	<div class="form-actions">
		<div class="col-sm-offset-1 col-sm-4">
			<?php echo Form::submit('submit', '登録', array('class' => 'btn btn-primary')); ?>
		</div>
	</div>
</fieldset>
<?php echo Form::close(); ?>