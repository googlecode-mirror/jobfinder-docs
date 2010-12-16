<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
</div>
<div id="wrapper" style="margin-top:60px;margin-left:350px">
	<div id="content_login">
	<div id="box">
		<h3>Đăng nhập</h3>
		<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('Admin',array('div'=>false,'id'=>'form'));?>
        <?php echo $this->Form->Input('username',array('label'=>'Tên đăng nhập:','div'=>false));?>
        <?php echo $this->Form->Input('password',array('label'=>'Mật khẩu:','div'=>false));?>
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Đăng nhập', true),array('div'=>false));?>
	    </div>
	</div>
	</div>
</div>