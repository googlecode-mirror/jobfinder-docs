<div class="job_types form">
<?php echo $this->Form->create('JobType');?>
	<fieldset>
 		<legend><?php __('Cập nhật loại công việc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Thao tác'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $this->Form->value('JobType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('JobType.id'))); ?></li>
		
	</ul>
</div>