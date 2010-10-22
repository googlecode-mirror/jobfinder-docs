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
    		<td><?php echo $job['JobContactInformation'][0]['company_name']; ?></td>
    	</tr>
    	<tr>
    		<td></td>
    		<td><?php echo $job['JobContactInformation'][0]['company_website']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Sơ lược về công ty: '); ?></td>
    		<td><?php echo $job['JobContactInformation'][0]['company_profile']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Quy mô công ty: '); ?></td>
    		<td><?php echo $company_size[$job['JobContactInformation'][0]['company_size']]; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Địa chỉ công ty: '); ?></td>
    		<td><?php echo $job['JobContactInformation'][0]['company_address']; ?></td>
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
        			<?php echo $job['Job']['job_title']; ?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Mô tả công việc: '); ?></td>
        		<td>
        			<?php echo $job['Job']['job_description']; ?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Cấp bậc tối thiểu: '); ?></td>
        		<td>
        			<?php echo $job['JobLevel']['level']; ?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Loại hình làm việc: '); ?></td>
        		<td>
        			<?php echo $job['JobType']['type']; ?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Ngành nghề: '); ?></td>
        		<td>
        			<?php echo $job['JobCategory']['name']; ?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Nơi làm việc: '); ?></td>
        		<td>
        			<?php
        			
        			$string = $job['Job']['job_locations'];
					$token = strtok($string, "|");

					while ($token != false)
					{
        				echo "$provinces[$token]<br />";
						$token = strtok("|");
					}
					?>
        		</td>
        	</tr>
        	<tr>
        		<td><?php __('Mức lương: '); ?></td>
        		<td>
        			<?php echo $job['Category']['name']; ?>
        		</td>
        	</tr>
        	<?php if($job['Category']['key'] == 'Specified'){
        		echo $html->tag('tr');	
        		echo $html->tag('td');
        		__('Minimun Salary');
        		echo $html->tag('/td');
        		echo $html->tag('td');
        		echo $job['Job']['minimun_salary'];
        		echo $html->tag('/td');
        		echo $html->tag('/tr');
        		echo $html->tag('tr');	
        		echo $html->tag('td');
        		__('Maximun Salary');
        		echo $html->tag('/td');
        		echo $html->tag('td');
        		echo $job['Job']['maximun_salary'];
        		echo $html->tag('/td');
        		echo $html->tag('/tr');
        	}?>

        	
        </table>
    	
    </fieldset>
    <br clear="all"/>
    <?php echo $this->Html->link(__('Nộp đơn', true), array('action' => 'apply', $job['Job']['id'])); ?>
    <?php echo $this->Html->link(__('Lưu việc làm này', true), array('action' => 'save', $job['Job']['id'])); ?>
</div>
