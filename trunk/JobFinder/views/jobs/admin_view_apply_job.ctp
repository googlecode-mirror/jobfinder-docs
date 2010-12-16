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
			<li><?php echo $this->Html->link(__('Hồ sơ ứng tuyển', true), array('controller' => 'jobs', 'action' => 'applyJob', 'admin'=> true)); ?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Thông Tin Hồ Sơ Ứng Tuyển ');?></h3>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div class="box_pre">
			<div class="box_left">Công ty ứng tuyển:</div>
			<div class="box_right"><span class="comp_name"><?php echo $jobApply['Job']['company_name']; ?></span>
			<br />
			</div>
			</div>
			
			<div class="box_pre">
			<div class="box_left">Chức danh:</div>
			<div class="box_right"><?php echo $this->Html->link($jobApply['Job']['job_title'], array('action' => 'view', $jobApply['JobApply']['job_id'], 'admin'=> false), array('target'=>'_blank')); ?>
			<br />
			</div>
			</div>

			<div class="box_pre">
			<div class="box_left">Họ tên ứng viên:</div>
			<div class="box_right"><?php echo $jobApply['Jobseeker']['last_name'].' '.$jobApply['Jobseeker']['first_name']; ?>
			<br />
			</div>
			</div>
			
			<div class="box_pre">
			<div class="box_left">Tiêu đề:</div>
			<div class="box_right"><?php echo $jobApply['JobApply']['subject']; ?>
			<br />
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Thư giới thiệu:</div>
			<div class="box_right"><?php echo $jobApply['JobApply']['cover_letter']; ?>
			<br />
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Hồ sơ đính kèm:</div>
			<div class="box_right"><?php echo $this->Html->link($jobApply['Resume']['resume_title'], array('action' => 'viewResume', $jobApply['JobApply']['resume_id'], 'admin'=> true), array('target'=>'_blank')); ?></div>
			</div>

			</td>
		</tr>
	</tbody>
</table>
</div>
	<br/>
<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'jobs', 'action' => 'admin_applyJob'),array('escape' => false, 'class'=>'button')); ?>
	</div>
</div>