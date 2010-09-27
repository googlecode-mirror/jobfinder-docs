<div class="employers form">
<?php echo $this->Form->create('Employer');?>
	<fieldset>
 		<legend><?php __('Edit Employer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('company_name');
		echo $this->Form->input('company_size');
		echo $this->Form->input('company_profile');
		echo $this->Form->input('company_logo');
		echo $this->Form->input('address');
		echo $this->Form->input('district');
		echo $this->Form->input('country_id');
		echo $this->Form->input('provice_id');
		echo $this->Form->input('website');
		echo $this->Form->input('contact_name');
		echo $this->Form->input('contact_position');
		echo $this->Form->input('telephone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('fax');
		echo $this->Form->input('howknow');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Employer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Employer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employers', true), array('action' => 'index'));?></li>
	</ul>
</div>