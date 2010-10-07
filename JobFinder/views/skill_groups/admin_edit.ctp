<div class="skillGroups form">
<?php echo $this->Form->create('SkillGroup');?>
	<fieldset>
 		<legend><?php __('Cập nhật nhóm kỹ năng'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Thao tác'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $this->Form->value('SkillGroup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SkillGroup.id'))); ?></li>
		
	</ul>
</div>