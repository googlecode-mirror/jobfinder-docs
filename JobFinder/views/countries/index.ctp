<div class="countries index">
	<h2><?php __('Countries');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('country_name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($countries as $country):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $country['Country']['id']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['country_name']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['created']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $country['Country']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $country['Country']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?></li>
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