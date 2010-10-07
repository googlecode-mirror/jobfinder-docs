<div class="skillGroups form">
<?php echo $this->Form->create('SkillGroup');?>
	<fieldset>
 		<legend><?php __('Thêm mới nhóm kỹ năng'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Danh sách nhóm kỹ năng', true), array('action' => 'index'));?></li>
		
	</ul>
</div>