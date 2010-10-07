<div class="skillGroups view">
<h2><?php  __('Nhóm kỹ năng');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skillGroup['SkillGroup']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kỹ năng'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skillGroup['SkillGroup']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skillGroup['SkillGroup']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skillGroup['SkillGroup']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cập nhật', true), array('action' => 'edit', $skillGroup['SkillGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $skillGroup['SkillGroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skillGroup['SkillGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách nhóm kỹ năng', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Thêm mới', true), array('action' => 'add')); ?> </li>
	</ul>
</div>