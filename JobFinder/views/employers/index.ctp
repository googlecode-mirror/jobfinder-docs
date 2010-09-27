<div class="employers index">
	<h2><?php __('Employers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('company_size');?></th>
			<th><?php echo $this->Paginator->sort('company_profile');?></th>
			<th><?php echo $this->Paginator->sort('company_logo');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('district');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('provice_id');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th><?php echo $this->Paginator->sort('contact_position');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('howknow');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employers as $employer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $employer['Employer']['id']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['email']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['password']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_name']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_size']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_profile']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_logo']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['address']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['district']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['country_id']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['provice_id']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['website']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['contact_name']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['contact_position']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['telephone']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['mobile']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['fax']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['howknow']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employer['Employer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employer['Employer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $employer['Employer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employer['Employer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employer', true), array('action' => 'add')); ?></li>
	</ul>
</div>