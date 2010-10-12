<div class="job_nav">
<div class="job_wrapmenu">
<div class="job_menu">
<ul>
	<li><?php echo $html->link('Trang chủ', 
			array('controller' => 'jobs', 'action' => 'index')); ?></li>
	<li><a href="#"> <span> Tìm việc</span> </a></li>
	<li><a href="#"> <span> Tìm hồ sơ</span> </a></li>
	<li><?php echo $html->link('Quản lý nghề nghiệp', 
			array('controller' => 'jobseekers', 'action' => 'index')); ?></li>
</ul>
</div>

	<div class="member_area">
	
	<?php 
		if(!$session->check('Jobseeker')){
			echo $html->link('Đăng nhập', array('controller' => 'jobseekers', 'action' => 'login'));
	?>
		<span class="job_spacemenu"> | </span> 
	<?php 
		echo $html->link('Đăng ký', array('controller' => 'jobseekers', 'action' => 'register')); 
		} 
		else 
		{
			echo " Xin chào ". $session->read('Jobseeker.Jobseeker.first_name');
	?>
		<span class="job_spacemenu"> | </span> 
		<?php 
		echo $html->link('Đăng xuất', array('controller' => 'jobseekers', 'action' => 'logout')); 
		}
	?>
	
	</div>
</div>

<div class="clearboth"></div>

</div>
<?php echo $this->Session->flash(); ?>