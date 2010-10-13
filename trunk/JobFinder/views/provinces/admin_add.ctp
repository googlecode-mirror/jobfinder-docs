<div class="provices form">
<?php echo $this->Form->create('Province');?>
	<fieldset>
 		<legend><?php __('Thêm mới tỉnh thành'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('country_id', array('empty' => 'Vui lòng chọn...'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Danh sách các tỉnh thành', true), array('action' => 'index'));?></li>
	</ul>
</div>