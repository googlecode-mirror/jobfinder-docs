<div id="sidebar">
	<ul>
    	<li><h3><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false), array('class'=>'house')); ?></h3></li>
        <li><h3><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'jobCategories', 'action' => 'index', 'admin'=> true), array('class'=>'folder_table')); ?></h3></li>
		<li><h3><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true),array('class'=>'manage')); ?></h3>
			<ul>
                <li><?php echo $this->Html->link(__('Duyệt hồ sơ', true), array('controller' => 'resumes', 'action' => 'approveResume', 'admin'=> true),array('class'=>'report')); ?></li>
           	</ul>
       	</li>
		<li><h3><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true),array('class'=>'manage')); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Đăng tin tuyển dụng', true), array('controller' => 'jobs', 'action' => 'postJob', 'admin'=> true),array('class'=>'manage_page')); ?></li>
                <li><?php echo $this->Html->link(__('Duyệt việc làm', true), array('controller' => 'jobs', 'action' => 'approveJob', 'admin'=> true),array('class'=>'folder')); ?></li>
                <li><?php echo $this->Html->link(__('Hồ sơ ứng tuyển', true), array('controller' => 'jobs', 'action' => 'applyJob', 'admin'=> true),array('class'=>'folder_table')); ?></li>
           	</ul>
       	</li>
		<li><h3><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true),array('class'=>'user')); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Người tìm việc', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true),array('class'=>'group')); ?></li>
			<li><?php echo $this->Html->link(__('Nhà tuyển dụng', true), array('controller' => 'employers', 'action' => 'index', 'admin'=> true),array('class'=>'group')); ?></li>
			<li><?php echo $this->Html->link(__('Administrator', true), array('controller' => 'admins', 'action' => 'account', 'admin'=> true),array('class'=>'group')); ?></li>
  			</ul>
        </li>
        <?php if($this->Session->read('Admin')):?>
        <li><h3><a class="user">[Logon] <?php echo $this->Session->read('Admin.Admin.username'); ?></a></h3>
	        <ul>
				<li><?php echo $this->Html->link(__('Logout', true), array('controller' => 'admins', 'action' => 'logout', 'admin'=> false),array('class'=>'logout')); ?></li>
			</ul>
		</li>
		<?php endif;?>		
	</ul>       
</div>