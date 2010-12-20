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
	<h3><?php __('Danh sách việc làm');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th width="250"><?php echo $this->Paginator->sort('Tiêu đề việc làm','job_title');?></th>
			<th width="200"><?php echo $this->Paginator->sort('Công ty','company_name');?></th>
			<th width="100"><?php echo $this->Paginator->sort('Người đăng tin','employer_id');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày cập nhật','created');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày duyệt','approved');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Trạng thái','status');?></th>
			<th width="130" class="actions"><?php __('');?></th>
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
		<td><?php if(!empty($job['Employer']['id'])){ echo $job['Employer']['email']; } else { echo __('Admin'); }?>&nbsp;</td>
		<td><?php echo $job['Job']['modified']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['approved']; ?>&nbsp;</td>
		<td><?php echo $status[$job['Job']['status']]; ?>&nbsp;</td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Xét duyệt', true), array('action' => 'admin_approve', $job['Job']['id'], 'admin'=> true)); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $job['Job']['id'], 'admin'=> true), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $job['Job']['job_title'])); ?>
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
	<?php echo $this->Html->link($html->tag('span', 'Đăng việc làm mới'), 
                            array('controller'=> 'jobs', 'action' => 'admin_postJob'),array('escape' => false, 'class'=>'button')); ?>
	</div>
</div>