<div class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-taeget=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo Html::anchor('member', 'software koubou judge', array('class' => 'navbar-brand')); ?>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><?php echo Html::anchor('contest', 'コンテスト') ?></li>
			<li><?php echo Html::anchor('problem', '問題') ?></li>
			<li><?php echo Html::anchor('result', "結果") ?></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<p class="navbar-text">現在の時刻：<span id="nowtime">0000</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<?php if(Auth::check()) :?>
			<?php echo Html::anchor('member/logout', 'ログアウト'); ?>
			<?php else:?>
			<?php echo Html::anchor('member/login', 'ログイン'); ?>
			<?php endif;?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			</p>
		</ul>
	</div>
</div>
