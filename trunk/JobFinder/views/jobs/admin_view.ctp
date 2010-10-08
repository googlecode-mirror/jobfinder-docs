<?php 
	$company_size = array(1 =>"1-10" , 2 => "10-50"); 
?>
<div class="jobs view">
<h2><?php  __('Job Detail');?></h2>
<fieldset>
<legend>Sơ lược về công ty</legend>
	<dl>
		<dt><?php __('Logo here'); ?></dt>
		<dd>
			<?php echo $job[0]['JobContactInformation'][0]['company_name']; ?>
		</dd>
		<dt>&nbsp;</dt>
		<dd>
			<?php echo $job[0]['JobContactInformation'][0]['company_website']; ?>
		</dd>
		<dt><?php __('Sơ lược về công ty: '); ?></dt>
		<dd>
			<?php echo $job[0]['JobContactInformation'][0]['company_profile']; ?>
		</dd>
		<dt><?php __('Quy mô công ty: '); ?></dt>
		<dd>
			<?php echo $company_size[$job[0]['JobContactInformation'][0]['company_size']]; ?>
		</dd>
		<dt><?php __('Địa chỉ công ty: '); ?></dt>
		<dd>
			<?php echo $job[0]['JobContactInformation'][0]['company_address']; ?>
		</dd>
	</dl>
</fieldset>
<fieldset>
<legend>Chi tiết công việc</legend>
	<dl>
		<dt><?php __('Chức danh: '); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['job_title']; ?>
		</dd>
		<dt><?php __('Mô tả công việc: '); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['job_description']; ?>
		</dd>
		<dt><?php __('Job Level Id'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['job_level_id']; ?>
		</dd>
		<dt><?php __('Job Type Id'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['job_type_id']; ?>
		</dd>
		<dt><?php __('Salary Range'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['salary_range']; ?>
		</dd>
		<dt><?php __('Minimun Salary'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['minimun_salary']; ?>
		</dd>
		<dt><?php __('Maximun Salary'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['maximun_salary']; ?>
		</dd>
		<dt><?php __('Job Category Id'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['job_category_id']; ?>
		</dd>
		<dt><?php __('Status'); ?></dt>
		<dd>
			<?php echo $job[0]['Job']['status']; ?>
		</dd>
	</dl>
</fieldset>
</div>
<?php echo $this->Html->link(__('Appprove Job', true), array('action' => 'approve', $job[0]['Job']['id'])); ?> 

