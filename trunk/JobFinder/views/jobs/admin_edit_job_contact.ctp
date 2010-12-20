<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
	<ul>
			<li><?php echo $this->Html->link(__('Việc làm đăng tuyển', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Đăng tin tuyển dụng', true), array('controller' => 'jobs', 'action' => 'postJob', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Duyệt việc làm', true), array('controller' => 'jobs', 'action' => 'approveJob', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Hồ sơ ứng tuyển', true), array('controller' => 'jobs', 'action' => 'applyJob', 'admin'=> true)); ?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<h3><?php __('Đăng tin tuyển dụng');?></h3>
	<br/>
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Thông tin công ty');?></h3>
        <?php echo $this->Form->create('Job',array('div'=>false,'id'=>'form'));?>
        <?php echo $this->Form->input('id');?>
        <?php echo $this->Form->input('status', array('type'=>'hidden'));?>
        <?php echo $this->Form->input('contact_name',array('label'=>'Tên người liên hệ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('contact_position',array('label'=>'Chức vụ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('mobile',array('label'=>'Số điện thoại:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('email',array('label'=>'Email nhận hồ sơ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>		
		<div align="center">
			<br/>
			<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'employers', 'action' => 'index'),array('escape' => false, 'class'=>'button')); ?>
	    	<?php echo $this->Form->Submit(__('Lưu', true),array('div'=>false));?>
	    </div>
	</div>
	</div>
</div>