<div class="JobCategories view">
<h2><?php  __('Job Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $JobCategories['JobCategory']['id']; ?>
			&nbsp;
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $JobCategories['JobCategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $JobCategories['JobCategory']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $JobCategories['JobCategory']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit JobCategory', true), array('action' => 'edit', $JobCategories['JobCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete JobCategory', true), array('action' => 'delete', $JobCategories['JobCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $JobCategories['JobCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List JobCategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New JobCategory', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
