<div class="provinces form">
<?php echo $this->Form->create('Province');?>
	<fieldset>
 		<legend><?php __('Edit province'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input ('country');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php __('Thao tác'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Province.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Province.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List provinces', true),array('controller' =>'provinces','action'=>'index'))?></li>
		
	</ul>
</div>