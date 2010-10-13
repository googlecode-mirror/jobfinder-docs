<div class="degree_levels view">
<h2><?php  __('Degree Level');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $degreeLevel['DegreeLevel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $degreeLevel['DegreeLevel']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $degreeLevel['DegreeLevel']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $degreeLevel['DegreeLevel']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Degree Level', true), array('action' => 'edit', $degreeLevel['DegreeLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Degree Level', true), array('action' => 'delete', $degreeLevel['DegreeLevel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true),$degreeLevel['DegreeLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Degree Levels', true), array('action' => 'index')); ?> </li>
	</ul>
</div>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Degree Level', true), array('controller' => 'degree_levels', 'action' => 'add'));?> </li>
		</ul>
	</div>

