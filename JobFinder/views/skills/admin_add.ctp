<div class="skills form">
<?php echo $this->Form->create('Skill');?>
	<fieldset>
 		<legend><?php __('Thêm mới kỹ năng'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('skill_group_id', array('empty' => 'Vui lòng chọn...'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Danh sách kỹ năng', true), array('action' => 'index'));?></li>
	</ul>
</div>