<?php echo $form->create('Jobseeker', array('action' => 'apply_job')); ?>
<h2><?php  __('Nộp đơn ứng tuyển');?></h2>
<table>
<?php echo $this->Form->input('JobApply.jobseeker_id', array('label'=>false, 'type'=> 'hidden', 'value'=> $this->Session->read('Jobseeker.Jobseeker.id'))); ?>
<?php echo $this->Form->input('JobApply.job_id', array('label'=>false,'type'=> 'hidden', 'value'=> $job['Job']['id'])); ?>
	<tr>
		<td><b><?php __('Chức danh '); ?></b></td>
		<td><b><?php echo $job['Job']['job_title']; ?></b></td>
	</tr>
	<tr>
		<td><b><?php __('Công ty ứng tuyển '); ?></b></td>
		<td><b><?php echo $job['Employer']['company_name']; ?></b></td>
	</tr>
	<tr>
		<td><b><?php __('Tiêu đề hồ sơ '); ?></b></td>
		<td><?php echo $this->Form->input('JobApply.subject', array('label'=>false)); ?></td>
	</tr>
	<tr>
		<td><b><?php __('Thư giới thiệu '); ?></b></td>
		<td><?php echo $this->Form->input('JobApply.cover_letter', array('label'=>false,'rows'=>10)); ?></td>
	</tr>
	<tr>
		<td><b><?php __('Hồ sơ đính kèm '); ?></b></td>
		<td><?php echo $this->Form->radio('JobApply.resume_id', $resumes, array('legend'=>false)); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->submit('Ứng tuyển');?></td>
		<td><?php echo $this->Html->link(__('Hủy', true), array('action' => 'index')); ?></td>
	</tr>
</table>

