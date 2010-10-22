<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
 		<legend><?php __('Admin Add Category'); ?></legend>
	<?php
		echo $this->Form->input('id'); 
		echo $this->Form->input('name');
		echo $this->Form->input('key');
		echo $this->Form->input('category_type_id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Category Types', true), array('controller' => 'category_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Type', true), array('controller' => 'category_types', 'action' => 'add')); ?> </li>
	</ul>
</div>