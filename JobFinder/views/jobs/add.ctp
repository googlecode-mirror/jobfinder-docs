<div class="jobs form">
<?php echo $this->Form->create('Job');?>
	<fieldset>
 		<legend><?php __('Add Job'); ?></legend>
	<?php
		echo $this->Form->input('employer_id');
		echo $this->Form->input('job_title');
		echo $this->Form->input('job_code');
		echo $this->Form->input('job_level_id');
		echo $this->Form->input('job_type_id');
		echo $this->Form->input('salary_range');
		echo $this->Form->input('minimun_salary');
		echo $this->Form->input('maximun_salary');
		echo $this->Form->input('job_category_id');
		echo $this->Form->input('job_description');
		echo $this->Form->input('approved');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index'));?></li>
	</ul>
</div>