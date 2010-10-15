<?php echo $this->element('job_menu'); ?>
<div class="countries index">
	<h2><?php __('Job saved');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('job_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobsaveds as $jobsaved):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobsaved['JobSaved']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->Link($jobsaved['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $jobsaved['Job']['id'])); ?>
		<td><?php echo $jobsaved['JobSaved']['created']; ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('controller'=> 'jobs','action' => 'view', $jobsaved['JobSaved']['id'])); ?>
			
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete_jobsaved', $jobsaved['JobSaved']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobsaved['JobSaved']['id'])); ?>
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
		
	</ul>
</div>
<?php
echo ('Trang quáº£n lÃ½ nghá»� nghiá»‡p');
?>