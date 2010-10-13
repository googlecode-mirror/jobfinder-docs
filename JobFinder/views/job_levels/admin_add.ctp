<div class="job_levels form">
<?php echo $this->Form->create('JobLevel');?>
	<fieldset>
 		<legend><?php __('Admin Add level'); ?></legend>
	<?php
		echo $this->Form->input('level');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List joblevels', true), array('action' => 'index'));?></li>
		
	</ul>
</div>