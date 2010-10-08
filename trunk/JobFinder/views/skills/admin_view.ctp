<div class="skills view">
<h2><?php  __('Kỹ năng');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kỹ năng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nhóm kỹ năng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['SkillGroup']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cập nhật', true), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $skill['Skill']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách kỹ năng', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Thêm mới', true), array('action' => 'add')); ?> </li>
	</ul>
</div>