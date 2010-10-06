<div class="countries view">
<h2><?php  __('Country');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['country_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country', true), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Country', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Employers');?></h3>
	<?php if (!empty($country['Employer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Company Name'); ?></th>
		<th><?php __('Company Size'); ?></th>
		<th><?php __('Company Profile'); ?></th>
		<th><?php __('Company Logo'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('District'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Province Id'); ?></th>
		<th><?php __('Website'); ?></th>
		<th><?php __('Contact Name'); ?></th>
		<th><?php __('Contact Position'); ?></th>
		<th><?php __('Telephone'); ?></th>
		<th><?php __('Mobile'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Howknow'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Actived'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Employer'] as $employer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employer['id'];?></td>
			<td><?php echo $employer['email'];?></td>
			<td><?php echo $employer['password'];?></td>
			<td><?php echo $employer['company_name'];?></td>
			<td><?php echo $employer['company_size'];?></td>
			<td><?php echo $employer['company_profile'];?></td>
			<td><?php echo $employer['company_logo'];?></td>
			<td><?php echo $employer['address'];?></td>
			<td><?php echo $employer['district'];?></td>
			<td><?php echo $employer['country_id'];?></td>
			<td><?php echo $employer['province_id'];?></td>
			<td><?php echo $employer['website'];?></td>
			<td><?php echo $employer['contact_name'];?></td>
			<td><?php echo $employer['contact_position'];?></td>
			<td><?php echo $employer['telephone'];?></td>
			<td><?php echo $employer['mobile'];?></td>
			<td><?php echo $employer['fax'];?></td>
			<td><?php echo $employer['howknow'];?></td>
			<td><?php echo $employer['created'];?></td>
			<td><?php echo $employer['modified'];?></td>
			<td><?php echo $employer['actived'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employers', 'action' => 'view', $employer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employers', 'action' => 'edit', $employer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employers', 'action' => 'delete', $employer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employer', true), array('controller' => 'employers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Jobseekers');?></h3>
	<?php if (!empty($country['Jobseeker'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Residence'); ?></th>
		<th><?php __('Howknow'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Actived'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Jobseeker'] as $jobseeker):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $jobseeker['id'];?></td>
			<td><?php echo $jobseeker['email'];?></td>
			<td><?php echo $jobseeker['password'];?></td>
			<td><?php echo $jobseeker['first_name'];?></td>
			<td><?php echo $jobseeker['last_name'];?></td>
			<td><?php echo $jobseeker['birthday'];?></td>
			<td><?php echo $jobseeker['gender'];?></td>
			<td><?php echo $jobseeker['country_id'];?></td>
			<td><?php echo $jobseeker['residence'];?></td>
			<td><?php echo $jobseeker['howknow'];?></td>
			<td><?php echo $jobseeker['created'];?></td>
			<td><?php echo $jobseeker['modified'];?></td>
			<td><?php echo $jobseeker['actived'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'jobseekers', 'action' => 'view', $jobseeker['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'jobseekers', 'action' => 'edit', $jobseeker['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'jobseekers', 'action' => 'delete', $jobseeker['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobseeker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Jobseeker', true), array('controller' => 'jobseekers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Provinces');?></h3>
	<?php if (!empty($country['Province'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Province'] as $province):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $province['id'];?></td>
			<td><?php echo $province['country_id'];?></td>
			<td><?php echo $province['name'];?></td>
			<td><?php echo $province['created'];?></td>
			<td><?php echo $province['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'provinces', 'action' => 'view', $province['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'provinces', 'action' => 'edit', $province['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'provinces', 'action' => 'delete', $province['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $province['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Resume Educations');?></h3>
	<?php if (!empty($country['ResumeEducation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Resume Id'); ?></th>
		<th><?php __('Degree Level Id'); ?></th>
		<th><?php __('Program'); ?></th>
		<th><?php __('Major'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('End Date'); ?></th>
		<th><?php __('Related Information'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['ResumeEducation'] as $resumeEducation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $resumeEducation['id'];?></td>
			<td><?php echo $resumeEducation['resume_id'];?></td>
			<td><?php echo $resumeEducation['degree_level_id'];?></td>
			<td><?php echo $resumeEducation['program'];?></td>
			<td><?php echo $resumeEducation['major'];?></td>
			<td><?php echo $resumeEducation['country_id'];?></td>
			<td><?php echo $resumeEducation['start_date'];?></td>
			<td><?php echo $resumeEducation['end_date'];?></td>
			<td><?php echo $resumeEducation['related_information'];?></td>
			<td><?php echo $resumeEducation['created'];?></td>
			<td><?php echo $resumeEducation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'resume_educations', 'action' => 'view', $resumeEducation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'resume_educations', 'action' => 'edit', $resumeEducation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'resume_educations', 'action' => 'delete', $resumeEducation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resumeEducation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resume Education', true), array('controller' => 'resume_educations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Resume Job Exps');?></h3>
	<?php if (!empty($country['ResumeJobExp'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Resume Work Exp Id'); ?></th>
		<th><?php __('Job Title'); ?></th>
		<th><?php __('Job Level Id'); ?></th>
		<th><?php __('Job Category Id'); ?></th>
		<th><?php __('Company Name'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Province Id'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('End Date'); ?></th>
		<th><?php __('Responsibilities Achievements'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['ResumeJobExp'] as $resumeJobExp):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $resumeJobExp['id'];?></td>
			<td><?php echo $resumeJobExp['resume_work_exp_id'];?></td>
			<td><?php echo $resumeJobExp['job_title'];?></td>
			<td><?php echo $resumeJobExp['job_level_id'];?></td>
			<td><?php echo $resumeJobExp['job_category_id'];?></td>
			<td><?php echo $resumeJobExp['company_name'];?></td>
			<td><?php echo $resumeJobExp['country_id'];?></td>
			<td><?php echo $resumeJobExp['province_id'];?></td>
			<td><?php echo $resumeJobExp['start_date'];?></td>
			<td><?php echo $resumeJobExp['end_date'];?></td>
			<td><?php echo $resumeJobExp['responsibilities_achievements'];?></td>
			<td><?php echo $resumeJobExp['created'];?></td>
			<td><?php echo $resumeJobExp['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'resume_job_exps', 'action' => 'view', $resumeJobExp['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'resume_job_exps', 'action' => 'edit', $resumeJobExp['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'resume_job_exps', 'action' => 'delete', $resumeJobExp['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resumeJobExp['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resume Job Exp', true), array('controller' => 'resume_job_exps', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Resumes');?></h3>
	<?php if (!empty($country['Resume'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Jobseeker Id'); ?></th>
		<th><?php __('Resume Title'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Martial Status'); ?></th>
		<th><?php __('Nationality'); ?></th>
		<th><?php __('Picture'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th><?php __('Province Id'); ?></th>
		<th><?php __('Telephone'); ?></th>
		<th><?php __('Mobile'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Approved'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Privacy Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Resume'] as $resume):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $resume['id'];?></td>
			<td><?php echo $resume['jobseeker_id'];?></td>
			<td><?php echo $resume['resume_title'];?></td>
			<td><?php echo $resume['first_name'];?></td>
			<td><?php echo $resume['last_name'];?></td>
			<td><?php echo $resume['birthday'];?></td>
			<td><?php echo $resume['gender'];?></td>
			<td><?php echo $resume['martial_status'];?></td>
			<td><?php echo $resume['nationality'];?></td>
			<td><?php echo $resume['picture'];?></td>
			<td><?php echo $resume['address'];?></td>
			<td><?php echo $resume['country_id'];?></td>
			<td><?php echo $resume['province_id'];?></td>
			<td><?php echo $resume['telephone'];?></td>
			<td><?php echo $resume['mobile'];?></td>
			<td><?php echo $resume['email'];?></td>
			<td><?php echo $resume['created'];?></td>
			<td><?php echo $resume['modified'];?></td>
			<td><?php echo $resume['approved'];?></td>
			<td><?php echo $resume['status'];?></td>
			<td><?php echo $resume['privacy_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'resumes', 'action' => 'view', $resume['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'resumes', 'action' => 'edit', $resume['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'resumes', 'action' => 'delete', $resume['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resume['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resume', true), array('controller' => 'resumes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
