<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
		<ul>
			<li><?php echo $this->Html->link(__('Ngành nghề', true), array('controller' => 'job_categories', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Loại hình công việc', true), array('controller' => 'job_types', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Cấp bậc', true), array('controller' => 'job_levels', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Bằng cấp', true), array('controller' => 'degree_levels', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Kỹ năng', true), array('controller' => 'skills', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Quốc gia/ Thành phố', true), array('controller' => 'provinces', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Danh mục khác', true), array('controller' => 'categories', 'action' => 'index', 'admin'=> true));?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Ngành nghề');?></h3>
	<table width="100%">
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('Tên ngành nghề','name');?></th>
			<th width="130px"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
			<th width="130px"><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
			<th width="120px"></th>
		</tr>
		</thead>
		<?php
			$i = 0;
			foreach ($JobCategories as $category):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $category['JobCategory']['name']; ?>&nbsp;</td>
			<td><?php echo $category['JobCategory']['created']; ?>&nbsp;</td>
			<td><?php echo $category['JobCategory']['modified']; ?>&nbsp;</td>
			<td class="a-center">
				<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $category['JobCategory']['id'])); ?> | 
				<?php echo $this->Html->link(__('Sửa', true), array('action' => 'edit', $category['JobCategory']['id'])); ?> | 
				<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $category['JobCategory']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s ?', true), $category['JobCategory']['name'])); ?>
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
	<div id="box">
		<h3>Thông tin Ngành nghề</h3>
		<?php echo $this->Form->create('JobCategory',array('div'=>false,'id'=>'form'));?>
		<?php echo $this->Form->Input('name',array('label'=>'Tên ngành nghề:','div'=>false,'error'=>array('wrap'=>'span'),'disabled'=>true));?>
		<div align="center">
			<br/>
			<?php echo $this->Html->link(__('Thêm mới', true),array('action' => 'index'));?> | 
	    	<?php echo $this->Html->link(__('Chỉnh sửa', true), array('action' => 'edit', $this->data['JobCategory']['id'])); ?>
	    </div>
	    <?php echo $this->Form->end();?>
	</div>
	</div>
</div>