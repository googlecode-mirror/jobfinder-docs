<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li class="current"><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
	
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
	<div id="box">
    <h3><?php __('Việc làm mới nhất');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th width="250">Tiêu đề việc làm</th>
			<th width="200">Công ty</th>
			<th width="100">Số lần xem</th>
			<th width="100">Hồ sơ ứng tuyển</th>
			<th width="130">Ngày cập nhật</th>
			<th width="130">Ngày duyệt</th>
			<th width="130">Trạng thái</th>
			<th width="130" class="actions"></th>
	    </tr> 
		</thead>
		<?php
			$status =  array(0 => 'Chưa duyệt', 1 =>'Đạt', 2=>'Không đạt', 3=>'Chờ duyệt lại');
			$i = 0;
			foreach ($jobs as $job):
				$class = null;
				if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
    <tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($job['Job']['job_title'], array('action' => 'preview', $job['Job']['id'], 'admin'=> true), array('target'=>'_blank')); ?>&nbsp;</td>
		<td><?php echo $job['Job']['company_name']; ?>&nbsp;</td>
		<td><?php echo $job['JobViewLog'][0]['views']; ?>&nbsp;</td>
		<td><?php echo count($job['JobApply']); ?>&nbsp;</td>
		<td><?php echo $job['Job']['created']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['approved']; ?>&nbsp;</td>
		<td><?php echo $status[$job['Job']['status']];?> | 
			<?php echo $this->Html->link(__('Xét duyệt', true), array('controller'=>'jobs','action' => 'approve', $job['Job']['id'], 'admin'=> true), array('target'=>'_blank')); ?>&nbsp;</td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Cập nhật', true), array('controller'=>'jobs','action' => 'preview', $job['Job']['id'], 'admin'=> true), array('target'=>'_blank')); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('controller'=>'jobs','action' => 'delete', $job['Job']['id'], 'admin'=> true), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $job['Job']['job_title'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>
    
	
	</div>
	<br/>
	<div id="box">
    <h3><?php __('Hồ sơ cập nhật gần nhất');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th width="250">Tiêu đề hồ sơ</th>
			<th width="200">Người tìm việc</th>
			<th width="100">Số lần xem</th>
			<th width="100">Tình trạng hồ sơ</th>
			<th width="130">Ngày tạo</th>
			<th width="130">Ngày cập nhật</th>
			<th width="130">Ngày duyệt</th>
			<th width="130">Trạng thái</th>
			<th width="130" class="actions"></th>
	    </tr> 
		</thead>
		<?php
			$status =  array(0 => 'Chưa duyệt', 1 =>'Đạt', 2=>'Không đạt', 3=>'Chờ duyệt lại');
			$privacyStatus =  array(0 => 'Hồ sơ ẩn', 1 =>'Cho phép tìm kiếm');
			$i = 0;
			foreach ($resumes as $resume):
				$class = null;
				if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
    <tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($resume['Resume']['resume_title'], array('action' => 'preview', $resume['Resume']['id'], 'admin'=> true)); ?>&nbsp;</td>
		<td><?php echo $resume['Jobseeker']['email']; ?>&nbsp;</td>
		<td><?php echo count($resume['ResumeViewLog']); ?>&nbsp;</td>
		<td><?php echo $privacyStatus[$resume['Resume']['privacy_status']]; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['created']; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['modified']; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['approved']; ?>&nbsp;</td>
		<td><?php echo $status[$resume['Resume']['status']]; ?> | 
			<?php echo $this->Html->link(__('Xét duyệt', true), array('controller'=>'resumes','action' => 'approve', $resume['Resume']['id'], 'admin'=> true)); ?>
		</td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Xem', true), array('controller'=>'resumes','action' => 'preview', $resume['Resume']['id'], 'admin'=> true)); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('controller'=>'resumes','action' => 'delete', $resume['Resume']['id'], 'admin'=> true), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $resume['Resume']['resume_title'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>
    
	
	</div>
	</div>
	</div>