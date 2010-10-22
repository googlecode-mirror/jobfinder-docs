<div class="employers view">
<h2><?php  __('Quản lý Employers');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<?php
	$i = 0;
	foreach ($employers as $employer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
        
       	<dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('Id'); ?></td>
            <dd><?php echo $employer['Employer']['id']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('email'); ?></td>
            <dd><?php echo $employer['Employer']['email']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('company_name'); ?></td>
            <dd><?php echo $employer['Employer']['company_name']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('company_size'); ?></td>
            <dd><?php echo $employer['Employer']['company_size']; ?>&nbsp;</dd>		
        </dt><dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('company_profile'); ?></td>
            <dd><?php echo $employer['Employer']['company_profile']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('company_logo'); ?></td>
            <dd><?php echo $employer['Employer']['company_logo']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('address'); ?></td>
            <dd><?php echo $employer['Employer']['address']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('district'); ?></td>
            <dd><?php echo $employer['Employer']['district']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('country'); ?></td>
            <dd><?php echo $employer['Country']['country_name']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('province'); ?></td>
            <dd><?php echo $employer['Province']['name']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('website'); ?></td>
           	<dd><?php echo $employer['Employer']['website']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('contact_name'); ?></td>
            <dd><?php echo $employer['Employer']['contact_name']; ?>&nbsp;</dd>	
        </dt>
       	<dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('contact_position'); ?></td>
            <dd><?php echo $employer['Employer']['contact_position']; ?>&nbsp;</dd>
        </dt>
              <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('telephone'); ?></td>
            <dd><?php echo $employer['Employer']['telephone']; ?>&nbsp;</dd>		
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('mobile'); ?></td>
            <dd><?php echo $employer['Employer']['mobile']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('fax'); ?></td>
            <dd><?php echo $employer['Employer']['fax']; ?>&nbsp;</dd>	
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('howknow'); ?></td>
            <dd><?php echo $employer['Employer']['howknow']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('last_login'); ?></td>
           	<dd><?php echo $employer['Employer']['last_login']; ?>&nbsp;</dd>
        </dt>
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('actived'); ?></td>
            <dd><?php echo $employer['Employer']['actived']; ?>&nbsp;</dd>	
        </dt>
       	<dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('created'); ?></td>
            <dd><?php echo $employer['Employer']['created']; ?>&nbsp;</dd>
        </dt>	 
        <dt>
            <td><?php if ($i % 2 == 0) echo $class;?><?php __('modified'); ?></td>
            <dd><?php echo $employer['Employer']['modified']; ?>&nbsp;</dd>
        </dt>
 
	</tr>
    
<?php endforeach; ?>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employer', true), array('action' => 'edit', $employer['Employer']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Employers', true), array('action' => 'index')); ?> </li>
	</ul>
 
 </div>



