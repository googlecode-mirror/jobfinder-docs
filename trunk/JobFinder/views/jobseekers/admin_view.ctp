<div class="jobseekers view">
<h2><?php  __('Quản lý Jobseekers');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<?php
	$i = 0;
	foreach ($jobseekers as $jobseeker):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
        
       	<dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('Id'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['id']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('email'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['email']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('first_name'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['first_name']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('last_name'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['last_name']; ?>&nbsp;</dd>		
        </dt><dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('birthday'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['birthday']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('gender'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['gender']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('country'); ?></td>
            <dd><?php echo $jobseeker['Country']['country_name']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('Province'); ?></td>
            <dd><?php echo $jobseeker['Province']['name']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('howknow'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['howknow']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('last_login'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['last_login']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('actived'); ?></td>
           	<dd><?php echo $jobseeker['Jobseeker']['actived']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('created'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['created']; ?>&nbsp;</dd>	
        </dt>
       	<dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('modified'); ?></td>
            <dd><?php echo $jobseeker['Jobseeker']['modified']; ?>&nbsp;</dd>
        </dt>	 
 
	</tr>
    
<?php endforeach; ?>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jobseeker', true), array('action' => 'edit', $jobseeker['Jobseeker']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Jobseekers', true), array('action' => 'index')); ?> </li>
	</ul>
</div>



