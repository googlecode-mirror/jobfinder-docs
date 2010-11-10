<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
	<div id="topmenu">
    	<ul>
        	<li><a href="index.html">Dashboard</a></li>
            <li class="current"><a href="#">Danh mục</a></li>
            <li><a href="users.html">Users</a></li>
            <li><a href="#">Manage</a></li>
            <li><a href="#">CMS</a></li>
            <li><a href="#">Statistics</a></li>
            <li><a href="#">Settings</a></li>
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
			<li><?php echo $this->Html->link(__('Nhóm kỹ năng', true), array('controller' => 'skillGroups', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Kỹ năng', true), array('controller' => 'skills', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Quốc gia', true), array('controller' => 'countries', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Tỉnh thành', true), array('controller' => 'provinces', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Loại danh mục khác', true), array('controller' => 'category_types', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Danh mục khác', true), array('controller' => 'categories', 'action' => 'index', 'admin'=> true));?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
    <div id="box">
	<h3><?php __('Cấp bậc công việc');?></h3>
    
	<table width="100%">
		<thead>
        <tr>
			<th><?php echo $this->Paginator->sort('Cấp bậc');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày tạo');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày cập nhật');?></th>
			<th width="130" class="actions"><?php __('');?></th>
	    </tr> 
		</thead>
		<?php
	$i = 0;
	foreach ($jobLevels as $jobLevel):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
    <tr<?php echo $class;?>>
		<td><?php echo $jobLevel['JobLevel']['level']; ?>&nbsp;</td>
		<td><?php echo $jobLevel['JobLevel']['created']; ?>&nbsp;</td>
		<td><?php echo $jobLevel['JobLevel']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $jobLevel['JobLevel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $jobLevel['JobLevel']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $jobLevel['JobLevel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobLevel['JobLevel']['id'])); ?>
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
		<h3>Thêm mới cấp bậc công việc</h3>
		<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('JobLevel',array('div'=>false,'id'=>'form'));?>
    	<fieldset>
	 		<legend>Thông tin cấp bậc</legend>
			<?php echo $this->Form->Input('level',array('label'=>'Cấp bậc:','div'=>false));?>
		</fieldset>
		<div align="center">
	    	<?php echo $this->Form->Submit(__('Thêm mới', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	</div>
</div>