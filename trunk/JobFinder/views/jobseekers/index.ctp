<?php echo $this->element('job_menu'); ?>
<div class="jobsaveds index">
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
	//pr($jobsaveds);
	foreach ($jobsaveds as $jobsaved):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?>>
		<td><?php echo $jobsaved['JobSaved']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->Link($jobsaved['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $jobsaved['JobSaved']['job_id'])); ?></td>
		<td><?php echo $jobsaved['JobSaved']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('controller'=> 'jobs','action' => 'view', $jobsaved['JobSaved']['job_id'])); ?>
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

<div class="resumes index">
	<h2><?php __('Your resumes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('resume_title');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	//pr($resumes);
	foreach ($resumes as $resume):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr <?php echo $class;?>>
		<td><?php echo $resume['Resume']['id']; ?>&nbsp;</td>
		<td><?php echo $this->Html->Link($resume['Resume']['resume_title'], array('controller' => 'resumes', 'action' => 'view', $resume['Resume']['id'])); ?></td>
		<td><?php echo $resume['Resume']['created']; ?>&nbsp;</td>
		<td><?php echo $resume['Resume']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('controller'=> 'resumes','action' => 'view', $resume['Resume']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('controller'=> 'resumes','action' => 'edit', $resume['Resume']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete_resume', $resume['Resume']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resume['Resume']['id'])); ?>
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
