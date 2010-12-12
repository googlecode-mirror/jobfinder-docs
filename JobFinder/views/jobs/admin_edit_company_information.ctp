<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
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
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<h3><?php __('Đăng tin tuyển dụng');?></h3>
	<br/>
    <div id="box">
	<h3><?php __('Thông tin công ty');?></h3>
	<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('Job',array('div'=>false,'id'=>'form'));?>
        <?php echo $this->Form->input('id');?>
        <?php echo $this->Form->input('company_name',array('label'=>'Tên công ty:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
        <?php echo $this->Form->input('company_size',array('label'=>'Quy mô công ty:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('company_profile',array('label'=>'Sơ lược công ty:','rows'=>10,'div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('company_address',array('label'=>'Địa chỉ công ty:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('country_id',array('label'=>'Quốc gia:','id'=>'countries','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('province_id',array('label'=>'Tỉnh/Thành phố:','id'=>'provinces','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('company_website',array('label'=>'Website:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('telephone',array('label'=>'Số điện thoại:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('fax',array('label'=>'Fax:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>		
		<div align="center">
			<br/>
			<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'employers', 'action' => 'index'),array('escape' => false, 'class'=>'button')); ?>
	    	<?php echo $this->Form->Submit(__('Lưu', true),array('div'=>false));?>
	    </div>
	</div>
	</div>
</div>