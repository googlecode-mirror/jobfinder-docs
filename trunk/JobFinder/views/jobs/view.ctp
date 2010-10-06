<div class="jobs view">
<h2><?php  __('Job Detail');?></h2>
<fieldset title="Sơ lược về công ty">
	<dl>
		<dd>
			
		</dd>
	</dl>
		

</fieldset>
	<dl>
		<dt><?php __('Job Title'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_title']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Job Code'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_code']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Job Level Id'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_level_id']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Job Type Id'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_type_id']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Salary Range'); ?></dt>
		<dd>
			<?php echo $job['Job']['salary_range']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Minimun Salary'); ?></dt>
		<dd>
			<?php echo $job['Job']['minimun_salary']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Maximun Salary'); ?></dt>
		<dd>
			<?php echo $job['Job']['maximun_salary']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Job Category Id'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_category_id']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Job Description'); ?></dt>
		<dd>
			<?php echo $job['Job']['job_description']; ?>
			&nbsp;
		</dd>
		<dt><?php __('Status'); ?></dt>
		<dd>
			<?php echo $job['Job']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
