 <div id="emp_nav">
   <div class="emp_wrapmenu">
    	<ul class="emp_mainnav">
        	<li><?php echo $html->link($html->tag('span', 'TRANG CHỦ'), 
					array('controller' => 'employers', 'action' => 'home'),array('escape' => false)); ?></li>
					
			<li><?php echo $html->link($html->tag('span', 'ĐĂNG TUYỂN DỤNG'), 
					array('controller' => 'jobs', 'action' => 'postJob'),array('escape' => false)); ?></li>	
			<li><?php echo $html->link($html->tag('span', 'QUẢN LÝ TUYỂN DỤNG'), 
					array('controller' => 'employers', 'action' => 'index'),array('escape' => false)); ?></li>
    	</ul>
		<div class="emp_login">
    		<?php 
				if(!$session->check('Employer')){
					echo $html->link('Đăng nhập', array('controller' => 'employers', 'action' => 'login'));
			?>
				<span class="job_spacemenu">|</span> 
			<?php echo $html->link('Đăng ký', array('controller' => 'employers', 'action' => 'register')); 
				} 
				else {
					echo $session->read('Employer.Employer.email');
			?>
				<span class="job_spacemenu">|</span>
				<?php echo $html->link('Đăng xuất', array('controller' => 'employers', 'action' => 'logout')); 
				}
			?>
	    </div>
        <br clear="all"/>
    </div>
 </div>