<?php echo $this->element('job_menu'); ?>

<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Quá trình làm việc</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeJobExp.resume_work_exp_id', array('type'=>'hidden', 'value' => $this->Session->read('workID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_title', array('label'=>'Chức danh: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_level_id', array('label'=>'Cấp bậc: ', 'empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_category_id', array('label'=>'Ngành nghề: ', 'empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.company_name', array('label'=>'Tên công ty: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.country_id', array('label'=>'Quốc gia: ', 'empty' => 'Vui lòng chọn...','id'=>'countries')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.province_id', array('label'=>'Tỉnh/Thành phố: ', 'empty' => 'Vui lòng chọn...','id'=>'provinces')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.start_date', array('label'=>'Ngày bắt đầu: ', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => '...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.end_date', array('label'=>'Ngày kết thúc: ','dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => 'Hiện tại')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.responsibilities_achievements', array('label'=>'Nhiệm vụ chính & Thành tích nổi bật: ')); ?></li>
</ul>
<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Thêm');?></div>
	</li>
</ul>
<ul>
	<li>
	<div class="job experiences index">
	<h2><?php __('Quá trình làm việc');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo ('Công ty');?></th>
			<th><?php echo ('Vị trí');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($jobExps as $jobExp):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $jobExp['ResumeJobExp']['company_name']; ?>&nbsp;</td>
			<td><?php echo $jobExp['ResumeJobExp']['job_title']; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('Edit', true), array('action' => 'editJobExp', $jobExp['ResumeJobExp']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'deleteJobExp', $jobExp['ResumeJobExp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobExp['ResumeJobExp']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</li>
</ul>
<ul>
	<li><?php if(!empty($jobExps)){ echo $this->Html->link(__('Continue', true), array('action' => 'addEducation')); }?></li>
</ul>
</div>
