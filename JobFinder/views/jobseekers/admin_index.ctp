<div class="jobseekers index">
	<h2><?php __('Quản lý Jobseekers');?></h2>
    
    <table cellpadding="0" cellspacing="0" >
        <tr>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
            <th><?php echo $this->Paginator->sort('birthday');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('province');?></th>
            <th><?php echo $this->Paginator->sort('howknow');?></th>
			<th><?php echo $this->Paginator->sort('last_login');?></th>
            <th><?php echo $this->Paginator->sort('actived');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	   </tr>

	<?php
	$i = 0;
	foreach ($jobseekers as $jobseeker):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobseeker['Jobseeker']['email']; ?>&nbsp;</td>		               		
	    <td><?php echo $jobseeker['Jobseeker']['first_name']; ?>&nbsp;</td>			
	    <td><?php echo $jobseeker['Jobseeker']['last_name']; ?>&nbsp;</td>		
	    <td><?php echo $jobseeker['Jobseeker']['birthday']; ?>&nbsp;</td>		
	    <td><?php echo $jobseeker['Jobseeker']['gender']; ?>&nbsp;</td>		
	    <td><?php echo $jobseeker['Country']['country_name']; ?>&nbsp;</td>			
	    <td><?php echo $jobseeker['Province']['name']; ?>&nbsp;</td>			
   	    <td><?php echo $jobseeker['Jobseeker']['howknow']; ?>&nbsp;</td>	
        <td><?php echo $jobseeker['Jobseeker']['last_login']; ?>&nbsp;</td>
    	<td><?php echo $jobseeker['Jobseeker']['actived']; ?>&nbsp;</td>
        <td><?php echo $jobseeker['Jobseeker']['created']; ?>&nbsp;</td>
    	<td><?php echo $jobseeker['Jobseeker']['modified']; ?>&nbsp;</td>
    	
	<td class="actions">
		<?php echo $this->Html->link(__('View', true), array('action' => 'view', $jobseeker['Jobseeker']['id'])); ?>
		<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $jobseeker['Jobseeker']['id'])); ?>
	
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
	  	<?php echo $this->Paginator->numbers();?>
 
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
