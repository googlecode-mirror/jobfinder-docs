<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('job detail');
?>

<?php 
	$company_size = array(1 =>"1-10" , 2 => "10-50");
?>
<div class="jobs_detail">
    <h2><?php  __('Job Detail');?></h2>
    <fieldset>
    <legend>Sơ lược về công ty</legend>
    
    
    <table>
    	<tr>
    		<td><?php __('Logo here'); ?></td>
    		<td><?php echo $job[0]['JobContactInformation'][0]['company_name']; ?></td>
    	</tr>
    	<tr>
    		<td></td>
    		<td><?php echo $job[0]['JobContactInformation'][0]['company_website']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Sơ lược về công ty: '); ?></td>
    		<td><?php echo $job[0]['JobContactInformation'][0]['company_profile']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Quy mô công ty: '); ?></td>
    		<td><?php echo $company_size[$job[0]['JobContactInformation'][0]['company_size']]; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Địa chỉ công ty: '); ?></td>
    		<td><?php echo $job[0]['JobContactInformation'][0]['company_address']; ?></td>
    	</tr>
    </table>
    </fieldset>
    
    <br clear="all"/>
    
    <fieldset>
        <legend>Chi tiết công việc</legend>
        <table>
        	<tr>
        		<td><?php __('Chức danh: '); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['job_title']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Mô tả công việc: '); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['job_description']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Cấp bậc tối thiểu: '); ?></td>
        		<td>
        			<?php echo $job[0]['JobLevel']['level']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Loại hình làm việc: '); ?></td>
        		<td>
        			<?php echo $job[0]['JobType']['type']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Ngành nghề: '); ?></td>
        		<td>
        			<?php echo $job[0]['JobCategory']['name']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Status'); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['status']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Salary Range'); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['salary_range']; ?>
        		<td>
        		</tr>
        	<tr>
        		<td><?php __('Minimun Salary'); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['minimun_salary']; ?>
        		</td>
        		</tr>
        	<tr>
        		<td><?php __('Maximun Salary'); ?></td>
        		<td>
        			<?php echo $job[0]['Job']['maximun_salary']; ?>
        		</td>
        	</tr>
        </table>
    	
    </fieldset>
    <br clear="all"/>
    
</div>
