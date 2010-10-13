<div class="degree_levels form">
<?php echo $this->Form->create('DegreeLevel');?>
	<fieldset>
 		<legend><?php __('Admin Add level'); ?></legend>
	<?php
		echo $this->Form->input('level_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List degreelevels', true), array('action' => 'index'));?></li>
		
	</ul>
</div>