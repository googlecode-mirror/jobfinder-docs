<div class="countries form">
<?php echo $this->Form->create('Country');?>
	<fieldset>
 		<legend><?php __('Edit Country'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Country.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Country.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Employers', true), array('controller' => 'employers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employer', true), array('controller' => 'employers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobseekers', true), array('controller' => 'jobseekers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jobseeker', true), array('controller' => 'jobseekers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resume Educations', true), array('controller' => 'resume_educations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resume Education', true), array('controller' => 'resume_educations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resume Job Exps', true), array('controller' => 'resume_job_exps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resume Job Exp', true), array('controller' => 'resume_job_exps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resumes', true), array('controller' => 'resumes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resume', true), array('controller' => 'resumes', 'action' => 'add')); ?> </li>
	</ul>
</div>