<div class="jobseekers form">
<?php echo $this->Form->create('Jobseeker');?>
	<fieldset>
 		<legend><?php __('Admin cập nhật trạng thái'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('actived');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Jobseekers', true), array('action' => 'index'));?></li>
	
	</ul>
</div>

