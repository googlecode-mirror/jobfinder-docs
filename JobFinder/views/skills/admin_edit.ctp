<div class="skills form">
<?php echo $this->Form->create('Skill');?>
	<fieldset>
 		<legend><?php __('Cập nhật kỹ năng'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('skill_group_id', array('empty' => 'Vui lòng chọn...'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Thao tác'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $this->Form->value('Skill.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Skill.id'))); ?></li>
		
	</ul>
</div>