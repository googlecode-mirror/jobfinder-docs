<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
	<div id="topmenu">
    	<ul>
        	<li><a href="">Dashboard</a></li>
            <li><a href="#">Danh mục</a></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
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
        <?php echo $this->Form->input('id'); ?>
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
	<h3 style="margin-bottom:5px"><?php __('Thông tin đăng tuyển');?></h3>
		<?php echo $this->Form->input('job_title',array('label'=>'Chức danh:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('job_code',array('label'=>'Mã số:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('job_level_id',array('label'=>'Cấp bậc:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('job_type_id',array('label'=>'Loại hình công việc:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('salary_range',array('label'=>'Mức lương:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('minimun_salary_range',array('label'=>'Tối thiểu:','div'=>false)); ?>
		<?php echo $this->Form->input('maximun_salary_range',array('label'=>'Tối đa:','div'=>false)); ?>
		<?php echo $this->Form->input('job_locations',array('label'=>'Nơi làm việc:','div'=>false,'class'=>'block','type' => 'select', 'multiple' => true,'size'=>'6','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('job_categories',array('label'=>'Ngành nghề:','div'=>false,'class'=>'block','type' => 'select', 'multiple' => true,'size'=>'6','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('job_description',array('label'=>'Mô tả công việc:','rows'=>10,'div'=>false)); ?>
		<?php echo $this->Form->input('job_requirement',array('label'=>'Yêu cầu công việc:','rows'=>10,'div'=>false)); ?>
		<?php echo $this->Form->input('degree_level_id',array('label'=>'Bằng cấp tối thiểu:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('year_experience',array('label'=>'Số năm kinh nghiệm:','div'=>false)); ?>
		<?php echo $this->Form->input('application_language',array('label'=>'Hồ sơ trình bày:','empty'=>'Vui lòng chọn...','div'=>false,'class'=>'block','style'=>'width:230px','error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('expired', array('label'=>'Ngày hết hạn nộp hồ sơ:', 'dateFormat' => 'DMY', 'div'=>false,
                                   		'minYear' => date('Y'), 'maxYear' => date('Y') + 1,'monthNames' => false,'error'=>array('wrap'=>'span')));?>
	<h3 style="margin-bottom:5px"><?php __('Thông tin liên hệ');?></h3>
		<?php echo $this->Form->input('contact_name',array('label'=>'Tên người liên hệ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('contact_position',array('label'=>'Chức vụ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('mobile',array('label'=>'Số điện thoại:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->input('email',array('label'=>'Email nhận hồ sơ:','div'=>false,'error'=>array('wrap'=>'span'))); ?>		
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Tiếp tục', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	</div>
</div>