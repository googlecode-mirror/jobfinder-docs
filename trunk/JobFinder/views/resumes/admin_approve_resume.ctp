<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
	<ul>
		<li><?php echo $this->Html->link(__('Hồ sơ người tìm việc', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
		<li><?php echo $this->Html->link(__('Duyệt hồ sơ', true), array('controller' => 'resumes', 'action' => 'approveResume', 'admin'=> true)); ?></li>
	</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Danh sách hồ sơ');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th width="250"><?php echo $this->Paginator->sort('Tiêu đề hồ sơ','resume_title');?></th>
			<th width="200"><?php echo $this->Paginator->sort('Người tìm việc','jobseeker.email');?></th>
			<th width="100"><?php echo $this->Paginator->sort('Tình trạng hồ sơ','privacy_status');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày duyệt','approved');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Trạng thái','status');?></th>
			<th width="130" class="actions"><?php __('');?></th>
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
		<td><?php echo $privacyStatus[$resume['Resume']['privacy_status']]; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['created']; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['modified']; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['approved']; ?>&nbsp;</td>
		<td><?php echo $status[$resume['Resume']['status']]; ?></td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Xét duyệt', true), array('action' => 'approve', $resume['Resume']['id'], 'admin'=> true)); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $resume['Resume']['id'], 'admin'=> true), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $resume['Resume']['resume_title'])); ?>
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