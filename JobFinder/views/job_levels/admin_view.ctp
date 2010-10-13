<div class="degree_levels view">
<h2><?php  __('Job Level');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobLevel['JobLevel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobLevel['JobLevel']['level']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobLevel['JobLevel']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobLevel['JobLevel']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit job Level', true), array('action' => 'edit', $jobLevel['JobLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete job Level', true), array('action' => 'delete', $jobLevel['JobLevel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true),$jobLevel['JobLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List job Levels', true), array('action' => 'index')); ?> </li>
	</ul>
</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New job Level', true), array('controller' => 'job_levels', 'action' => 'add'));?> </li>
		</ul>
	</div>

