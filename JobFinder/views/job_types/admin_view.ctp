<div class="job_types view">
<h2><?php  __('Loại công việc');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobType['JobType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobType['JobType']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobType['JobType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobType['JobType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cập nhật', true), array('action' => 'edit', $jobType['JobType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $jobType['JobType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobType['JobType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách loại công việc', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Thêm mới', true), array('action' => 'add')); ?> </li>
	</ul>
</div>