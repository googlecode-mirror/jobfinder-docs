<div class="job_levels form">
<?php echo $this->Form->create('JobLevel');?>
	<fieldset>
 		<legend><?php __('Admin Edit Level'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('level');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('JobLevel.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('JobLevel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Level', true), array('action' => 'index'));?></li>
	
	</ul>
</div>

