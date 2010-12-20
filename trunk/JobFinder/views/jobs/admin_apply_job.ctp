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
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Danh sách đơn ứng tuyển');?></h3>
	<table width="100%">
		<thead>
        <tr>
        	<th width="250"><?php echo $this->Paginator->sort('Tiêu đề','subject');?></th>
			<th width="200"><?php echo $this->Paginator->sort('Họ tên ứng viên','jobseeker.last_name');?></th>
			<th width="250"><?php echo $this->Paginator->sort('Chức danh','job.job_title');?></th>
			<th width="200"><?php echo $this->Paginator->sort('Công ty','job.company_name');?></th>
			<th width="150"><?php echo $this->Paginator->sort('Hồ sơ đính kèm','resume.resume_title');?></th>
			<th width="150"><?php echo $this->Paginator->sort('Ngày nộp đơn','created');?></th>
			<th width="130" class="actions"><?php __('');?></th>
	    </tr> 
		</thead>
		<?php
			$i = 0;
			foreach ($jobApplys as $jobApply):
				$class = null;
				if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
    <tr<?php echo $class;?>>
    	<td><strong><?php echo $jobApply['JobApply']['subject']; ?>&nbsp;</strong></td>
    	<td><?php echo $jobApply['Jobseeker']['last_name'].' '.$jobApply['Jobseeker']['first_name']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($jobApply['Job']['job_title'], array('action' => 'view', $jobApply['JobApply']['job_id'], 'admin'=> false), array('target'=>'_blank')); ?>&nbsp;</td>
		<td><?php echo $jobApply['Job']['company_name']; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($jobApply['Resume']['resume_title'], array('action' => 'viewResume', $jobApply['JobApply']['resume_id'], 'admin'=> true), array('target'=>'_blank')); ?>&nbsp;</td>
		<td><?php echo $jobApply['JobApply']['created']; ?>&nbsp;</td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Xem', true), array('action' => 'viewApplyJob', $jobApply['JobApply']['id'], 'admin'=> true), array('target'=>'_blank')); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteApplyJob', $jobApply['JobApply']['id'], 'admin'=> true), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $jobApply['JobApply']['subject'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>
    
	<p>
		<?php echo $this->Paginator->counter(array('format' => __('Trang %page%/%pages%, tổng cộng %count% records', true)));?>	
	</p>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
	 	|<?php echo $this->Paginator->numbers();?>
 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	</div>
	<br/>
	</div>
</div>