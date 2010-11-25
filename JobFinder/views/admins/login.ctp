<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
</div>
<div id="wrapper" style="margin-top:60px;margin-left:220px">
	<div id="content" style="width:500px;">
	<div id="box">
		<h3>Đăng nhập</h3>
		<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('Admin',array('div'=>false,'id'=>'form'));?>
        <?php echo $this->Form->Input('username',array('label'=>'Username:','div'=>false));?>
        <?php echo $this->Form->Input('password',array('label'=>'Password:','div'=>false));?>
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Login', true),array('div'=>false));?>
	    </div>
	</div>
	</div>
</div>